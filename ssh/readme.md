## check for .ssh folder and existing keys
```bash
  cd ~/.ssh
  ls -a
```

## Create default key pair (no current id_rsa files)
ssh-keygen -t rsa

## Create rsa
ssh-keygen -t specific_rsa

## SSH with key file (id_rsa)
```bash
  ssh -i id_rsa username@ipaddress
```
## change permisssions of private key
```bash
  chmod 600 id_rsa
```
