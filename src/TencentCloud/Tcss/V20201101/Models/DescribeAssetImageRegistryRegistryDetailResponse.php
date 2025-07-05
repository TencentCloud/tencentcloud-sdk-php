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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAssetImageRegistryRegistryDetail返回参数结构体
 *
 * @method string getName() 获取仓库名
 * @method void setName(string $Name) 设置仓库名
 * @method string getUsername() 获取用户名
 * @method void setUsername(string $Username) 设置用户名
 * @method string getPassword() 获取密码
 * @method void setPassword(string $Password) 设置密码
 * @method string getUrl() 获取仓库url
 * @method void setUrl(string $Url) 设置仓库url
 * @method string getRegistryType() 获取仓库类型，列表：harbor
 * @method void setRegistryType(string $RegistryType) 设置仓库类型，列表：harbor
 * @method string getRegistryVersion() 获取仓库版本
 * @method void setRegistryVersion(string $RegistryVersion) 设置仓库版本
 * @method string getNetType() 获取网络类型，列表：public（公网）,private（私网）
 * @method void setNetType(string $NetType) 设置网络类型，列表：public（公网）,private（私网）
 * @method string getRegistryRegion() 获取区域，列表:default（默认）
 * @method void setRegistryRegion(string $RegistryRegion) 设置区域，列表:default（默认）
 * @method integer getSpeedLimit() 获取限速
 * @method void setSpeedLimit(integer $SpeedLimit) 设置限速
 * @method integer getInsecure() 获取安全模式（证书校验）：0（默认） 非安全模式（跳过证书校验）：1
 * @method void setInsecure(integer $Insecure) 设置安全模式（证书校验）：0（默认） 非安全模式（跳过证书校验）：1
 * @method array getConnDetectDetail() 获取联通性检测结果详情
 * @method void setConnDetectDetail(array $ConnDetectDetail) 设置联通性检测结果详情
 * @method string getInstanceID() 获取tcr情况下instance_id
 * @method void setInstanceID(string $InstanceID) 设置tcr情况下instance_id
 * @method integer getSyncMode() 获取同步方式，0全量同步，1增量同步
 * @method void setSyncMode(integer $SyncMode) 设置同步方式，0全量同步，1增量同步
 * @method boolean getNeedScan() 获取是否自动授权&扫描，选择全量同步时只针对最新版本镜像，增量同步时则包含所有新增镜像
 * @method void setNeedScan(boolean $NeedScan) 设置是否自动授权&扫描，选择全量同步时只针对最新版本镜像，增量同步时则包含所有新增镜像
 * @method string getWebhookUrl() 获取webhook接入地址
 * @method void setWebhookUrl(string $WebhookUrl) 设置webhook接入地址
 * @method string getWebhookToken() 获取webhook接入token	
 * @method void setWebhookToken(string $WebhookToken) 设置webhook接入token	
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAssetImageRegistryRegistryDetailResponse extends AbstractModel
{
    /**
     * @var string 仓库名
     */
    public $Name;

    /**
     * @var string 用户名
     */
    public $Username;

    /**
     * @var string 密码
     */
    public $Password;

    /**
     * @var string 仓库url
     */
    public $Url;

    /**
     * @var string 仓库类型，列表：harbor
     */
    public $RegistryType;

    /**
     * @var string 仓库版本
     */
    public $RegistryVersion;

    /**
     * @var string 网络类型，列表：public（公网）,private（私网）
     */
    public $NetType;

    /**
     * @var string 区域，列表:default（默认）
     */
    public $RegistryRegion;

    /**
     * @var integer 限速
     */
    public $SpeedLimit;

    /**
     * @var integer 安全模式（证书校验）：0（默认） 非安全模式（跳过证书校验）：1
     */
    public $Insecure;

    /**
     * @var array 联通性检测结果详情
     */
    public $ConnDetectDetail;

    /**
     * @var string tcr情况下instance_id
     */
    public $InstanceID;

    /**
     * @var integer 同步方式，0全量同步，1增量同步
     */
    public $SyncMode;

    /**
     * @var boolean 是否自动授权&扫描，选择全量同步时只针对最新版本镜像，增量同步时则包含所有新增镜像
     */
    public $NeedScan;

    /**
     * @var string webhook接入地址
     */
    public $WebhookUrl;

    /**
     * @var string webhook接入token	
     */
    public $WebhookToken;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Name 仓库名
     * @param string $Username 用户名
     * @param string $Password 密码
     * @param string $Url 仓库url
     * @param string $RegistryType 仓库类型，列表：harbor
     * @param string $RegistryVersion 仓库版本
     * @param string $NetType 网络类型，列表：public（公网）,private（私网）
     * @param string $RegistryRegion 区域，列表:default（默认）
     * @param integer $SpeedLimit 限速
     * @param integer $Insecure 安全模式（证书校验）：0（默认） 非安全模式（跳过证书校验）：1
     * @param array $ConnDetectDetail 联通性检测结果详情
     * @param string $InstanceID tcr情况下instance_id
     * @param integer $SyncMode 同步方式，0全量同步，1增量同步
     * @param boolean $NeedScan 是否自动授权&扫描，选择全量同步时只针对最新版本镜像，增量同步时则包含所有新增镜像
     * @param string $WebhookUrl webhook接入地址
     * @param string $WebhookToken webhook接入token	
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("RegistryType",$param) and $param["RegistryType"] !== null) {
            $this->RegistryType = $param["RegistryType"];
        }

        if (array_key_exists("RegistryVersion",$param) and $param["RegistryVersion"] !== null) {
            $this->RegistryVersion = $param["RegistryVersion"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("RegistryRegion",$param) and $param["RegistryRegion"] !== null) {
            $this->RegistryRegion = $param["RegistryRegion"];
        }

        if (array_key_exists("SpeedLimit",$param) and $param["SpeedLimit"] !== null) {
            $this->SpeedLimit = $param["SpeedLimit"];
        }

        if (array_key_exists("Insecure",$param) and $param["Insecure"] !== null) {
            $this->Insecure = $param["Insecure"];
        }

        if (array_key_exists("ConnDetectDetail",$param) and $param["ConnDetectDetail"] !== null) {
            $this->ConnDetectDetail = [];
            foreach ($param["ConnDetectDetail"] as $key => $value){
                $obj = new RegistryConnDetectResult();
                $obj->deserialize($value);
                array_push($this->ConnDetectDetail, $obj);
            }
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("SyncMode",$param) and $param["SyncMode"] !== null) {
            $this->SyncMode = $param["SyncMode"];
        }

        if (array_key_exists("NeedScan",$param) and $param["NeedScan"] !== null) {
            $this->NeedScan = $param["NeedScan"];
        }

        if (array_key_exists("WebhookUrl",$param) and $param["WebhookUrl"] !== null) {
            $this->WebhookUrl = $param["WebhookUrl"];
        }

        if (array_key_exists("WebhookToken",$param) and $param["WebhookToken"] !== null) {
            $this->WebhookToken = $param["WebhookToken"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
