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
 * @method string getName() 获取<p>仓库名</p>
 * @method void setName(string $Name) 设置<p>仓库名</p>
 * @method string getUsername() 获取<p>用户名</p>
 * @method void setUsername(string $Username) 设置<p>用户名</p>
 * @method string getPassword() 获取<p>密码</p>
 * @method void setPassword(string $Password) 设置<p>密码</p>
 * @method string getUrl() 获取<p>仓库url</p>
 * @method void setUrl(string $Url) 设置<p>仓库url</p>
 * @method string getRegistryType() 获取<p>仓库类型，列表：harbor</p>
 * @method void setRegistryType(string $RegistryType) 设置<p>仓库类型，列表：harbor</p>
 * @method string getRegistryVersion() 获取<p>仓库版本</p>
 * @method void setRegistryVersion(string $RegistryVersion) 设置<p>仓库版本</p>
 * @method string getNetType() 获取<p>网络类型，列表：public（公网）,private（私网）</p>
 * @method void setNetType(string $NetType) 设置<p>网络类型，列表：public（公网）,private（私网）</p>
 * @method string getRegistryRegion() 获取<p>区域，列表:default（默认）</p>
 * @method void setRegistryRegion(string $RegistryRegion) 设置<p>区域，列表:default（默认）</p>
 * @method integer getSpeedLimit() 获取<p>限速</p>
 * @method void setSpeedLimit(integer $SpeedLimit) 设置<p>限速</p>
 * @method integer getInsecure() 获取<p>安全模式（证书校验）：0（默认） 非安全模式（跳过证书校验）：1</p>
 * @method void setInsecure(integer $Insecure) 设置<p>安全模式（证书校验）：0（默认） 非安全模式（跳过证书校验）：1</p>
 * @method array getConnDetectDetail() 获取<p>联通性检测结果详情</p>
 * @method void setConnDetectDetail(array $ConnDetectDetail) 设置<p>联通性检测结果详情</p>
 * @method string getInstanceID() 获取<p>tcr情况下instance_id</p>
 * @method void setInstanceID(string $InstanceID) 设置<p>tcr情况下instance_id</p>
 * @method integer getSyncMode() 获取<p>同步方式，0全量同步，1增量同步</p>
 * @method void setSyncMode(integer $SyncMode) 设置<p>同步方式，0全量同步，1增量同步</p>
 * @method boolean getNeedScan() 获取<p>是否自动授权&amp;扫描，选择全量同步时只针对最新版本镜像，增量同步时则包含所有新增镜像</p>
 * @method void setNeedScan(boolean $NeedScan) 设置<p>是否自动授权&amp;扫描，选择全量同步时只针对最新版本镜像，增量同步时则包含所有新增镜像</p>
 * @method string getWebhookUrl() 获取<p>webhook接入地址</p>
 * @method void setWebhookUrl(string $WebhookUrl) 设置<p>webhook接入地址</p>
 * @method string getWebhookToken() 获取<p>webhook接入token</p>
 * @method void setWebhookToken(string $WebhookToken) 设置<p>webhook接入token</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAssetImageRegistryRegistryDetailResponse extends AbstractModel
{
    /**
     * @var string <p>仓库名</p>
     */
    public $Name;

    /**
     * @var string <p>用户名</p>
     */
    public $Username;

    /**
     * @var string <p>密码</p>
     */
    public $Password;

    /**
     * @var string <p>仓库url</p>
     */
    public $Url;

    /**
     * @var string <p>仓库类型，列表：harbor</p>
     */
    public $RegistryType;

    /**
     * @var string <p>仓库版本</p>
     */
    public $RegistryVersion;

    /**
     * @var string <p>网络类型，列表：public（公网）,private（私网）</p>
     */
    public $NetType;

    /**
     * @var string <p>区域，列表:default（默认）</p>
     */
    public $RegistryRegion;

    /**
     * @var integer <p>限速</p>
     */
    public $SpeedLimit;

    /**
     * @var integer <p>安全模式（证书校验）：0（默认） 非安全模式（跳过证书校验）：1</p>
     */
    public $Insecure;

    /**
     * @var array <p>联通性检测结果详情</p>
     */
    public $ConnDetectDetail;

    /**
     * @var string <p>tcr情况下instance_id</p>
     */
    public $InstanceID;

    /**
     * @var integer <p>同步方式，0全量同步，1增量同步</p>
     */
    public $SyncMode;

    /**
     * @var boolean <p>是否自动授权&amp;扫描，选择全量同步时只针对最新版本镜像，增量同步时则包含所有新增镜像</p>
     */
    public $NeedScan;

    /**
     * @var string <p>webhook接入地址</p>
     */
    public $WebhookUrl;

    /**
     * @var string <p>webhook接入token</p>
     */
    public $WebhookToken;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Name <p>仓库名</p>
     * @param string $Username <p>用户名</p>
     * @param string $Password <p>密码</p>
     * @param string $Url <p>仓库url</p>
     * @param string $RegistryType <p>仓库类型，列表：harbor</p>
     * @param string $RegistryVersion <p>仓库版本</p>
     * @param string $NetType <p>网络类型，列表：public（公网）,private（私网）</p>
     * @param string $RegistryRegion <p>区域，列表:default（默认）</p>
     * @param integer $SpeedLimit <p>限速</p>
     * @param integer $Insecure <p>安全模式（证书校验）：0（默认） 非安全模式（跳过证书校验）：1</p>
     * @param array $ConnDetectDetail <p>联通性检测结果详情</p>
     * @param string $InstanceID <p>tcr情况下instance_id</p>
     * @param integer $SyncMode <p>同步方式，0全量同步，1增量同步</p>
     * @param boolean $NeedScan <p>是否自动授权&amp;扫描，选择全量同步时只针对最新版本镜像，增量同步时则包含所有新增镜像</p>
     * @param string $WebhookUrl <p>webhook接入地址</p>
     * @param string $WebhookToken <p>webhook接入token</p>
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
