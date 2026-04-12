<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * API 明细
 *
 * @method string getApiId() 获取<p>API ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiId(string $ApiId) 设置<p>API ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespaceId() 获取<p>命名空间ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespaceId(string $NamespaceId) 设置<p>命名空间ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespaceName() 获取<p>命名空间名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespaceName(string $NamespaceName) 设置<p>命名空间名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMicroserviceId() 获取<p>服务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMicroserviceId(string $MicroserviceId) 设置<p>服务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMicroserviceName() 获取<p>服务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMicroserviceName(string $MicroserviceName) 设置<p>服务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPath() 获取<p>API 请求路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPath(string $Path) 设置<p>API 请求路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPathMapping() 获取<p>Api 映射路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPathMapping(string $PathMapping) 设置<p>Api 映射路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMethod() 获取<p>请求方法</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMethod(string $Method) 设置<p>请求方法</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupId() 获取<p>所属分组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(string $GroupId) 设置<p>所属分组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUsableStatus() 获取<p>是否禁用</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsableStatus(string $UsableStatus) 设置<p>是否禁用</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReleaseStatus() 获取<p>发布状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReleaseStatus(string $ReleaseStatus) 设置<p>发布状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRateLimitStatus() 获取<p>开启限流</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRateLimitStatus(string $RateLimitStatus) 设置<p>开启限流</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMockStatus() 获取<p>是否开启mock</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMockStatus(string $MockStatus) 设置<p>是否开启mock</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedTime() 获取<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedTime(string $UpdatedTime) 设置<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReleasedTime() 获取<p>发布时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReleasedTime(string $ReleasedTime) 设置<p>发布时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupName() 获取<p>所属分组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupName(string $GroupName) 设置<p>所属分组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeout() 获取<p>API 超时，单位毫秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeout(integer $Timeout) 设置<p>API 超时，单位毫秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHost() 获取<p>Api所在服务host</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHost(string $Host) 设置<p>Api所在服务host</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApiType() 获取<p>API类型。 ms ： 微服务API； external :外部服务Api</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiType(string $ApiType) 设置<p>API类型。 ms ： 微服务API； external :外部服务Api</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>Api描述信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>Api描述信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApiMatchType() 获取<p>API路径匹配类型。normal：普通API；wildcard：通配API。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiMatchType(string $ApiMatchType) 设置<p>API路径匹配类型。normal：普通API；wildcard：通配API。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRpcExt() 获取<p>RPC 额外信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRpcExt(string $RpcExt) 设置<p>RPC 额外信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGatewayDeployGroupId() 获取<p>部署组id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayDeployGroupId(string $GatewayDeployGroupId) 设置<p>部署组id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMd5() 获取<p>md5</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMd5(string $Md5) 设置<p>md5</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRpcType() 获取<p>RPC 类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRpcType(string $RpcType) 设置<p>RPC 类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getPathMappingUnsupported() 获取<p>是否禁用短路径访问开关</p>
 * @method void setPathMappingUnsupported(boolean $PathMappingUnsupported) 设置<p>是否禁用短路径访问开关</p>
 * @method string getPathMappingUnsupportedMsg() 获取<p>禁用短路径访问开关原因</p>
 * @method void setPathMappingUnsupportedMsg(string $PathMappingUnsupportedMsg) 设置<p>禁用短路径访问开关原因</p>
 */
class ApiDetailInfo extends AbstractModel
{
    /**
     * @var string <p>API ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiId;

    /**
     * @var string <p>命名空间ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NamespaceId;

    /**
     * @var string <p>命名空间名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NamespaceName;

    /**
     * @var string <p>服务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MicroserviceId;

    /**
     * @var string <p>服务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MicroserviceName;

    /**
     * @var string <p>API 请求路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Path;

    /**
     * @var string <p>Api 映射路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PathMapping;

    /**
     * @var string <p>请求方法</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Method;

    /**
     * @var string <p>所属分组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupId;

    /**
     * @var string <p>是否禁用</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsableStatus;

    /**
     * @var string <p>发布状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReleaseStatus;

    /**
     * @var string <p>开启限流</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RateLimitStatus;

    /**
     * @var string <p>是否开启mock</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MockStatus;

    /**
     * @var string <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var string <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedTime;

    /**
     * @var string <p>发布时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReleasedTime;

    /**
     * @var string <p>所属分组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupName;

    /**
     * @var integer <p>API 超时，单位毫秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timeout;

    /**
     * @var string <p>Api所在服务host</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Host;

    /**
     * @var string <p>API类型。 ms ： 微服务API； external :外部服务Api</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiType;

    /**
     * @var string <p>Api描述信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string <p>API路径匹配类型。normal：普通API；wildcard：通配API。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiMatchType;

    /**
     * @var string <p>RPC 额外信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RpcExt;

    /**
     * @var string <p>部署组id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayDeployGroupId;

    /**
     * @var string <p>md5</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Md5;

    /**
     * @var string <p>RPC 类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RpcType;

    /**
     * @var boolean <p>是否禁用短路径访问开关</p>
     */
    public $PathMappingUnsupported;

    /**
     * @var string <p>禁用短路径访问开关原因</p>
     */
    public $PathMappingUnsupportedMsg;

    /**
     * @param string $ApiId <p>API ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NamespaceId <p>命名空间ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NamespaceName <p>命名空间名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MicroserviceId <p>服务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MicroserviceName <p>服务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Path <p>API 请求路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PathMapping <p>Api 映射路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Method <p>请求方法</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupId <p>所属分组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UsableStatus <p>是否禁用</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReleaseStatus <p>发布状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RateLimitStatus <p>开启限流</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MockStatus <p>是否开启mock</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedTime <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReleasedTime <p>发布时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupName <p>所属分组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Timeout <p>API 超时，单位毫秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Host <p>Api所在服务host</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApiType <p>API类型。 ms ： 微服务API； external :外部服务Api</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>Api描述信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApiMatchType <p>API路径匹配类型。normal：普通API；wildcard：通配API。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RpcExt <p>RPC 额外信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GatewayDeployGroupId <p>部署组id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Md5 <p>md5</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RpcType <p>RPC 类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $PathMappingUnsupported <p>是否禁用短路径访问开关</p>
     * @param string $PathMappingUnsupportedMsg <p>禁用短路径访问开关原因</p>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ApiId",$param) and $param["ApiId"] !== null) {
            $this->ApiId = $param["ApiId"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("MicroserviceId",$param) and $param["MicroserviceId"] !== null) {
            $this->MicroserviceId = $param["MicroserviceId"];
        }

        if (array_key_exists("MicroserviceName",$param) and $param["MicroserviceName"] !== null) {
            $this->MicroserviceName = $param["MicroserviceName"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("PathMapping",$param) and $param["PathMapping"] !== null) {
            $this->PathMapping = $param["PathMapping"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("UsableStatus",$param) and $param["UsableStatus"] !== null) {
            $this->UsableStatus = $param["UsableStatus"];
        }

        if (array_key_exists("ReleaseStatus",$param) and $param["ReleaseStatus"] !== null) {
            $this->ReleaseStatus = $param["ReleaseStatus"];
        }

        if (array_key_exists("RateLimitStatus",$param) and $param["RateLimitStatus"] !== null) {
            $this->RateLimitStatus = $param["RateLimitStatus"];
        }

        if (array_key_exists("MockStatus",$param) and $param["MockStatus"] !== null) {
            $this->MockStatus = $param["MockStatus"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("ReleasedTime",$param) and $param["ReleasedTime"] !== null) {
            $this->ReleasedTime = $param["ReleasedTime"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("ApiType",$param) and $param["ApiType"] !== null) {
            $this->ApiType = $param["ApiType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ApiMatchType",$param) and $param["ApiMatchType"] !== null) {
            $this->ApiMatchType = $param["ApiMatchType"];
        }

        if (array_key_exists("RpcExt",$param) and $param["RpcExt"] !== null) {
            $this->RpcExt = $param["RpcExt"];
        }

        if (array_key_exists("GatewayDeployGroupId",$param) and $param["GatewayDeployGroupId"] !== null) {
            $this->GatewayDeployGroupId = $param["GatewayDeployGroupId"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }

        if (array_key_exists("RpcType",$param) and $param["RpcType"] !== null) {
            $this->RpcType = $param["RpcType"];
        }

        if (array_key_exists("PathMappingUnsupported",$param) and $param["PathMappingUnsupported"] !== null) {
            $this->PathMappingUnsupported = $param["PathMappingUnsupported"];
        }

        if (array_key_exists("PathMappingUnsupportedMsg",$param) and $param["PathMappingUnsupportedMsg"] !== null) {
            $this->PathMappingUnsupportedMsg = $param["PathMappingUnsupportedMsg"];
        }
    }
}
