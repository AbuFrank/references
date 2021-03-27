## Create quality GIF from video

```bash
ffmpeg -ss 61.0 -t 2.5 -i StickAround.mp4 -filter_complex "[0:v] palettegen" palette.png
ffmpeg -ss 61.0 -t 2.5 -i StickAround.mp4 -i palette.png -filter_complex "[0:v][1:v] paletteuse" prettyStickAround.gif
```

## Compress and scale video  
```bash
ffmpeg -i input -c:v libx264 \
-preset fast -crf 28 -an \
-filter:v scale=1920x1080 output
```
using libx264 for the video codec  
crf can be: 14, 18, 24, 28, 32, 38, 46, 51.  
-an to not use the audio stream
-filter:v for scaling
