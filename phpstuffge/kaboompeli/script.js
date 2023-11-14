const FLOOR_HEIGHT = 48;
const JUMP_FORCE = 425;
const SPEED = 200;

kaboom({
    width: 360,
    height:  760,
    canvas: document.getElementById("game_canvas")
});
loadSprite("bg","sprites/bg.png");

loadSprite("bean", "sprites/bean.png");

scene("game", () => {

    setGravity(1600);
    add([sprite("bg", { width: width(), height: height() })]);
    const player = add([
        sprite("bean"),
        pos(80, 40),
        area(),
        body(),
    ]);

    add([
        rect(width(), FLOOR_HEIGHT),
        outline(4),
        pos(0, height()),
        anchor("botleft"),
        area(),
        body({ isStatic: true }),
        color(127, 200, 255),
    ]);
    add([
        rect(width(), FLOOR_HEIGHT),
        outline(4),
        pos(0, 0),
        anchor("botleft"),
        area(),
        body({ isStatic: true }),
        color(127, 200, 255),
    ]);
    function jump() {
            player.jump(JUMP_FORCE);
    }

    onKeyPress("space", jump);
    onClick(jump);

    function spawnTree() {
        const offset = rand(-50,50);

       
        add([
            rect(48, rand(400, 500)),
            area(),
            outline(4),
            pos(width(), height() / 2 + offset +750 / 2),
            anchor("botleft"),
            color(255, 180, 255),
            move(LEFT, SPEED),
            "tree",
        ]);
        add([
            rect(48, rand(200, 500)),
            area(),
            outline(4),
            pos(width(), height() / 2 + offset - 600 / 2),
            anchor("botleft"),
            color(255, 180, 255),
            move(LEFT, SPEED),
            "tree",
        ]);

        wait(rand(0.5, 1.5), spawnTree);

    }

    spawnTree();
    player.onCollide("tree", () => {
        go("lose", score);
        burp();
        addKaboom(player.pos);
    });

    // keep track of score
    let score = 0;

    const scoreLabel = add([
        text(score),
        pos(24, 24),
    ]);

    // increment score every frame
    onUpdate(() => {
        score++;
        scoreLabel.text = score;
    });

});

scene("lose", (score) => {
    add([sprite("bg", { width: width(), height: height() })]);
    add([
        sprite("bean"),
        pos(width() / 2, height() / 2 - 80),
        scale(2),
        anchor("center"),
    ]);
    // display score
    add([
        text(score),
        pos(width() / 2, height() / 2 + 80),
        scale(2),
        anchor("center"),
    ]);

    // go back to game with space is pressed
    onKeyPress("space", () => go("game"));
    onClick(() => go("game"));

});

go("game");