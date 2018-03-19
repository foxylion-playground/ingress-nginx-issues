```
docker build -t foxylion/temp:backend-beta.12-issues backend
docker push foxylion/temp:backend-beta.12-issues

docker build -t foxylion/temp:ingress-default-backend-beta.12-issues.v2 default-backend
docker push foxylion/temp:ingress-default-backend-beta.12-issues.v2

kubectl apply -f controller.yml
kubectl apply -f default-backend.yml
kubectl apply -f backend.yml
```
