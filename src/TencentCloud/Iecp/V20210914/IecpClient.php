<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace TencentCloud\Iecp\V20210914;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Iecp\V20210914\Models as Models;

/**
 * @method Models\ApplyMarketComponentResponse ApplyMarketComponent(Models\ApplyMarketComponentRequest $req) 从组件市场选中组件并添加到应用模板列表
 * @method Models\BuildMessageRouteResponse BuildMessageRoute(Models\BuildMessageRouteRequest $req) 建立消息路由
 * @method Models\CreateApplicationVisualizationResponse CreateApplicationVisualization(Models\CreateApplicationVisualizationRequest $req) 创建可视化创建应用模板
 * @method Models\CreateConfigMapResponse CreateConfigMap(Models\CreateConfigMapRequest $req) 创建ConfigMap
 * @method Models\CreateEdgeNodeResponse CreateEdgeNode(Models\CreateEdgeNodeRequest $req) 创建边缘节点
 * @method Models\CreateEdgeNodeBatchResponse CreateEdgeNodeBatch(Models\CreateEdgeNodeBatchRequest $req) 批量预注册节点
 * @method Models\CreateEdgeNodeGroupResponse CreateEdgeNodeGroup(Models\CreateEdgeNodeGroupRequest $req) 创建边缘单元NodeGroup
 * @method Models\CreateEdgeNodeUnitTemplateResponse CreateEdgeNodeUnitTemplate(Models\CreateEdgeNodeUnitTemplateRequest $req) 创建边缘单元NodeUnit模板
 * @method Models\CreateEdgeUnitApplicationVisualizationResponse CreateEdgeUnitApplicationVisualization(Models\CreateEdgeUnitApplicationVisualizationRequest $req) 可视化创建应用
 * @method Models\CreateEdgeUnitApplicationYamlResponse CreateEdgeUnitApplicationYaml(Models\CreateEdgeUnitApplicationYamlRequest $req) yaml方式创建应用
 * @method Models\CreateEdgeUnitCloudResponse CreateEdgeUnitCloud(Models\CreateEdgeUnitCloudRequest $req) 创建边缘单元
 * @method Models\CreateEdgeUnitDevicesResponse CreateEdgeUnitDevices(Models\CreateEdgeUnitDevicesRequest $req) 批量绑定设备到单元
 * @method Models\CreateIotDeviceResponse CreateIotDevice(Models\CreateIotDeviceRequest $req) 创建子设备
 * @method Models\CreateMessageRouteResponse CreateMessageRoute(Models\CreateMessageRouteRequest $req) 创建消息路由
 * @method Models\CreateNamespaceResponse CreateNamespace(Models\CreateNamespaceRequest $req) 创建命名空间
 * @method Models\CreateSecretResponse CreateSecret(Models\CreateSecretRequest $req) 创建Secret
 * @method Models\CreateUpdateNodeUnitResponse CreateUpdateNodeUnit(Models\CreateUpdateNodeUnitRequest $req) 创建或更新边缘单元NodeUnit
 * @method Models\CreateUserTokenResponse CreateUserToken(Models\CreateUserTokenRequest $req) 创建token
 * @method Models\DeleteApplicationsResponse DeleteApplications(Models\DeleteApplicationsRequest $req) 删除应用模板
 * @method Models\DeleteConfigMapResponse DeleteConfigMap(Models\DeleteConfigMapRequest $req) 删除ConfigMap
 * @method Models\DeleteEdgeNodeGroupResponse DeleteEdgeNodeGroup(Models\DeleteEdgeNodeGroupRequest $req) 删除边缘单元NodeGroup
 * @method Models\DeleteEdgeNodeUnitTemplatesResponse DeleteEdgeNodeUnitTemplates(Models\DeleteEdgeNodeUnitTemplatesRequest $req) 删除边缘单元NodeUnit模板
 * @method Models\DeleteEdgeNodesResponse DeleteEdgeNodes(Models\DeleteEdgeNodesRequest $req) 批量删除边缘节点
 * @method Models\DeleteEdgeUnitApplicationsResponse DeleteEdgeUnitApplications(Models\DeleteEdgeUnitApplicationsRequest $req) 删除应用列表
 * @method Models\DeleteEdgeUnitCloudResponse DeleteEdgeUnitCloud(Models\DeleteEdgeUnitCloudRequest $req) 删除边缘单元
 * @method Models\DeleteEdgeUnitDeployGridItemResponse DeleteEdgeUnitDeployGridItem(Models\DeleteEdgeUnitDeployGridItemRequest $req) 重新部署边缘单元指定Grid下应用
 * @method Models\DeleteEdgeUnitDevicesResponse DeleteEdgeUnitDevices(Models\DeleteEdgeUnitDevicesRequest $req) 批量解绑单元设备
 * @method Models\DeleteEdgeUnitPodResponse DeleteEdgeUnitPod(Models\DeleteEdgeUnitPodRequest $req) 删除指定pod
 * @method Models\DeleteIotDeviceResponse DeleteIotDevice(Models\DeleteIotDeviceRequest $req) 删除设备
 * @method Models\DeleteIotDeviceBatchResponse DeleteIotDeviceBatch(Models\DeleteIotDeviceBatchRequest $req) 批量删除设备
 * @method Models\DeleteMessageRouteResponse DeleteMessageRoute(Models\DeleteMessageRouteRequest $req) 删除消息路由
 * @method Models\DeleteNamespaceResponse DeleteNamespace(Models\DeleteNamespaceRequest $req) 删除命名空间
 * @method Models\DeleteNodeUnitResponse DeleteNodeUnit(Models\DeleteNodeUnitRequest $req) 删除边缘单元NodeUnit
 * @method Models\DeleteSecretResponse DeleteSecret(Models\DeleteSecretRequest $req) 删除Secret
 * @method Models\DescribeApplicationVisualizationResponse DescribeApplicationVisualization(Models\DescribeApplicationVisualizationRequest $req) 获取应用模板可视化配置信息
 * @method Models\DescribeApplicationYamlResponse DescribeApplicationYaml(Models\DescribeApplicationYamlRequest $req) 查询应用模板Yaml
 * @method Models\DescribeApplicationYamlErrorResponse DescribeApplicationYamlError(Models\DescribeApplicationYamlErrorRequest $req) 检查应用模板的Yaml配置
 * @method Models\DescribeApplicationsResponse DescribeApplications(Models\DescribeApplicationsRequest $req) 获取应用模板列表
 * @method Models\DescribeConfigMapResponse DescribeConfigMap(Models\DescribeConfigMapRequest $req) 获取ConfigMap详情
 * @method Models\DescribeConfigMapYamlErrorResponse DescribeConfigMapYamlError(Models\DescribeConfigMapYamlErrorRequest $req) 校验ConfigMap的Yaml语法
 * @method Models\DescribeConfigMapsResponse DescribeConfigMaps(Models\DescribeConfigMapsRequest $req) 获取ConfigMap列表
 * @method Models\DescribeDracoEdgeNodeInstallerResponse DescribeDracoEdgeNodeInstaller(Models\DescribeDracoEdgeNodeInstallerRequest $req) 自动获取Draco设备的安装包
 * @method Models\DescribeEdgeAgentNodeInstallerResponse DescribeEdgeAgentNodeInstaller(Models\DescribeEdgeAgentNodeInstallerRequest $req) 获取节点安装信息
 * @method Models\DescribeEdgeDefaultVpcResponse DescribeEdgeDefaultVpc(Models\DescribeEdgeDefaultVpcRequest $req) 获取边缘集群默认VPC信息
 * @method Models\DescribeEdgeNodeResponse DescribeEdgeNode(Models\DescribeEdgeNodeRequest $req) 获取边缘节点信息
 * @method Models\DescribeEdgeNodePodContainersResponse DescribeEdgeNodePodContainers(Models\DescribeEdgeNodePodContainersRequest $req) 查询节点Pod内的容器列表
 * @method Models\DescribeEdgeNodePodsResponse DescribeEdgeNodePods(Models\DescribeEdgeNodePodsRequest $req) 查询节点Pod列表
 * @method Models\DescribeEdgeNodeRemarkListResponse DescribeEdgeNodeRemarkList(Models\DescribeEdgeNodeRemarkListRequest $req) 获取节点备注信息列表
 * @method Models\DescribeEdgeNodesResponse DescribeEdgeNodes(Models\DescribeEdgeNodesRequest $req) 查询边缘节点列表
 * @method Models\DescribeEdgeOperationLogsResponse DescribeEdgeOperationLogs(Models\DescribeEdgeOperationLogsRequest $req) 查询边缘操作日志
 * @method Models\DescribeEdgePodResponse DescribeEdgePod(Models\DescribeEdgePodRequest $req) 查询边缘单元Pod
 * @method Models\DescribeEdgeSnNodesResponse DescribeEdgeSnNodes(Models\DescribeEdgeSnNodesRequest $req) 查询预注册节点列表
 * @method Models\DescribeEdgeUnitApplicationEventsResponse DescribeEdgeUnitApplicationEvents(Models\DescribeEdgeUnitApplicationEventsRequest $req) 获取应用事件列表
 * @method Models\DescribeEdgeUnitApplicationLogsResponse DescribeEdgeUnitApplicationLogs(Models\DescribeEdgeUnitApplicationLogsRequest $req) 获取应用日志
 * @method Models\DescribeEdgeUnitApplicationPodContainersResponse DescribeEdgeUnitApplicationPodContainers(Models\DescribeEdgeUnitApplicationPodContainersRequest $req) 获取应用容器状态
 * @method Models\DescribeEdgeUnitApplicationPodsResponse DescribeEdgeUnitApplicationPods(Models\DescribeEdgeUnitApplicationPodsRequest $req) 获取应用下Pod状态
 * @method Models\DescribeEdgeUnitApplicationVisualizationResponse DescribeEdgeUnitApplicationVisualization(Models\DescribeEdgeUnitApplicationVisualizationRequest $req) 获取单元可视化配置信息
 * @method Models\DescribeEdgeUnitApplicationYamlResponse DescribeEdgeUnitApplicationYaml(Models\DescribeEdgeUnitApplicationYamlRequest $req) 获取应用的Yaml配置
 * @method Models\DescribeEdgeUnitApplicationYamlErrorResponse DescribeEdgeUnitApplicationYamlError(Models\DescribeEdgeUnitApplicationYamlErrorRequest $req) 检查单元应用的Yaml配置
 * @method Models\DescribeEdgeUnitApplicationsResponse DescribeEdgeUnitApplications(Models\DescribeEdgeUnitApplicationsRequest $req) 获取单元下应用列表
 * @method Models\DescribeEdgeUnitCloudResponse DescribeEdgeUnitCloud(Models\DescribeEdgeUnitCloudRequest $req) 查询边缘集群详情
 * @method Models\DescribeEdgeUnitDeployGridResponse DescribeEdgeUnitDeployGrid(Models\DescribeEdgeUnitDeployGridRequest $req) 查询边缘单元Grid列表
 * @method Models\DescribeEdgeUnitDeployGridItemResponse DescribeEdgeUnitDeployGridItem(Models\DescribeEdgeUnitDeployGridItemRequest $req) 查询边缘单元指定Grid下的部署应用列表
 * @method Models\DescribeEdgeUnitDeployGridItemYamlResponse DescribeEdgeUnitDeployGridItemYaml(Models\DescribeEdgeUnitDeployGridItemYamlRequest $req) 查询指定Grid下应用的Yaml
 * @method Models\DescribeEdgeUnitExtraResponse DescribeEdgeUnitExtra(Models\DescribeEdgeUnitExtraRequest $req) 查询边缘单元额外信息
 * @method Models\DescribeEdgeUnitGridEventsResponse DescribeEdgeUnitGridEvents(Models\DescribeEdgeUnitGridEventsRequest $req) 查询边缘单元Grid事件列表
 * @method Models\DescribeEdgeUnitGridPodsResponse DescribeEdgeUnitGridPods(Models\DescribeEdgeUnitGridPodsRequest $req) 查询边缘单元Grid的Pod列表
 * @method Models\DescribeEdgeUnitMonitorStatusResponse DescribeEdgeUnitMonitorStatus(Models\DescribeEdgeUnitMonitorStatusRequest $req) 查询边缘集群监控状态
 * @method Models\DescribeEdgeUnitNodeGroupResponse DescribeEdgeUnitNodeGroup(Models\DescribeEdgeUnitNodeGroupRequest $req) 查询边缘集群NodeGroup
 * @method Models\DescribeEdgeUnitNodeUnitTemplatesResponse DescribeEdgeUnitNodeUnitTemplates(Models\DescribeEdgeUnitNodeUnitTemplatesRequest $req) 查询边缘单元EdgeUnit模板列表
 * @method Models\DescribeEdgeUnitsCloudResponse DescribeEdgeUnitsCloud(Models\DescribeEdgeUnitsCloudRequest $req) 查询边缘单元列表
 * @method Models\DescribeIotDeviceResponse DescribeIotDevice(Models\DescribeIotDeviceRequest $req) 获取设备信息
 * @method Models\DescribeIotDevicesResponse DescribeIotDevices(Models\DescribeIotDevicesRequest $req) 获取设备列表信息
 * @method Models\DescribeMessageRouteListResponse DescribeMessageRouteList(Models\DescribeMessageRouteListRequest $req) 获取消息路由列表
 * @method Models\DescribeMonitorMetricsResponse DescribeMonitorMetrics(Models\DescribeMonitorMetricsRequest $req) 查询边缘单元监控数据
 * @method Models\DescribeNamespaceResponse DescribeNamespace(Models\DescribeNamespaceRequest $req) 获取命名空间
 * @method Models\DescribeNamespaceResourcesResponse DescribeNamespaceResources(Models\DescribeNamespaceResourcesRequest $req) 获取命名空间下的资源信息
 * @method Models\DescribeNamespacesResponse DescribeNamespaces(Models\DescribeNamespacesRequest $req) 获取命名空间列表信息
 * @method Models\DescribeNodeUnitResponse DescribeNodeUnit(Models\DescribeNodeUnitRequest $req) 查询边缘单元NodeUnit列表
 * @method Models\DescribeNodeUnitTemplateOnNodeGroupResponse DescribeNodeUnitTemplateOnNodeGroup(Models\DescribeNodeUnitTemplateOnNodeGroupRequest $req) 查询指定NodeGroup下NodeUnit模板列表
 * @method Models\DescribeSecretResponse DescribeSecret(Models\DescribeSecretRequest $req) 获取Secret详情
 * @method Models\DescribeSecretYamlErrorResponse DescribeSecretYamlError(Models\DescribeSecretYamlErrorRequest $req) 校验Secret的Yaml语法
 * @method Models\DescribeSecretsResponse DescribeSecrets(Models\DescribeSecretsRequest $req) 获取Secrets列表
 * @method Models\DescribeYeheResourceLimitResponse DescribeYeheResourceLimit(Models\DescribeYeheResourceLimitRequest $req) 查询用户的资源限制
 * @method Models\GetMarketComponentResponse GetMarketComponent(Models\GetMarketComponentRequest $req) 获取组件市场的组件信息
 * @method Models\GetMarketComponentListResponse GetMarketComponentList(Models\GetMarketComponentListRequest $req) 获取组件市场组件列表
 * @method Models\ModifyApplicationBasicInfoResponse ModifyApplicationBasicInfo(Models\ModifyApplicationBasicInfoRequest $req) 修改应用模板基本信息
 * @method Models\ModifyApplicationVisualizationResponse ModifyApplicationVisualization(Models\ModifyApplicationVisualizationRequest $req) 修改应用模板配置
 * @method Models\ModifyConfigMapResponse ModifyConfigMap(Models\ModifyConfigMapRequest $req) 修改ConfigMap
 * @method Models\ModifyEdgeDracoNodeResponse ModifyEdgeDracoNode(Models\ModifyEdgeDracoNodeRequest $req) 编辑draco设备信息
 * @method Models\ModifyEdgeNodeLabelsResponse ModifyEdgeNodeLabels(Models\ModifyEdgeNodeLabelsRequest $req) 编辑边缘节点标签
 * @method Models\ModifyEdgeUnitResponse ModifyEdgeUnit(Models\ModifyEdgeUnitRequest $req) 修改边缘集群
 * @method Models\ModifyEdgeUnitApplicationBasicInfoResponse ModifyEdgeUnitApplicationBasicInfo(Models\ModifyEdgeUnitApplicationBasicInfoRequest $req) 修改单元应用基本信息
 * @method Models\ModifyEdgeUnitApplicationVisualizationResponse ModifyEdgeUnitApplicationVisualization(Models\ModifyEdgeUnitApplicationVisualizationRequest $req) 可视化修改应用配置
 * @method Models\ModifyEdgeUnitApplicationYamlResponse ModifyEdgeUnitApplicationYaml(Models\ModifyEdgeUnitApplicationYamlRequest $req) Yaml方式修改应用配置
 * @method Models\ModifyEdgeUnitCloudApiResponse ModifyEdgeUnitCloudApi(Models\ModifyEdgeUnitCloudApiRequest $req) 更新边缘单元信息
 * @method Models\ModifyEdgeUnitDeployGridItemResponse ModifyEdgeUnitDeployGridItem(Models\ModifyEdgeUnitDeployGridItemRequest $req) 修改边缘单元Grid部署应用副本数
 * @method Models\ModifyIotDeviceResponse ModifyIotDevice(Models\ModifyIotDeviceRequest $req) 修改设备信息
 * @method Models\ModifyNodeUnitTemplateResponse ModifyNodeUnitTemplate(Models\ModifyNodeUnitTemplateRequest $req) 修改边缘单元NodeUnit模板
 * @method Models\ModifySecretResponse ModifySecret(Models\ModifySecretRequest $req) 修改Secret
 * @method Models\RedeployEdgeUnitApplicationResponse RedeployEdgeUnitApplication(Models\RedeployEdgeUnitApplicationRequest $req) 单元应用重部署
 * @method Models\SetRouteOnOffResponse SetRouteOnOff(Models\SetRouteOnOffRequest $req) 开关消息路由
 */

class IecpClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "iecp.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "iecp";

    /**
     * @var string
     */
    protected $version = "2021-09-14";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("iecp")."\\"."V20210914\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
