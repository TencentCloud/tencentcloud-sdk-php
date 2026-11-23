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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGovernanceInstances请求参数结构体
 *
 * @method string getService() 获取<p>实例所在的服务名。</p>
 * @method void setService(string $Service) 设置<p>实例所在的服务名。</p>
 * @method string getNamespace() 获取<p>实例所在命名空间名。</p>
 * @method void setNamespace(string $Namespace) 设置<p>实例所在命名空间名。</p>
 * @method string getInstanceId() 获取<p>tse实例id。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>tse实例id。</p>
 * @method string getHost() 获取<p>根据实例ip过滤，多个ip使用英文逗号分隔。</p>
 * @method void setHost(string $Host) 设置<p>根据实例ip过滤，多个ip使用英文逗号分隔。</p>
 * @method string getInstanceVersion() 获取<p>根据实例版本过滤。</p>
 * @method void setInstanceVersion(string $InstanceVersion) 设置<p>根据实例版本过滤。</p>
 * @method string getProtocol() 获取<p>根据实例协议过滤。</p>
 * @method void setProtocol(string $Protocol) 设置<p>根据实例协议过滤。</p>
 * @method boolean getHealthStatus() 获取<p>根据实例健康状态过滤。false：表示不健康，true：表示健康。</p>
 * @method void setHealthStatus(boolean $HealthStatus) 设置<p>根据实例健康状态过滤。false：表示不健康，true：表示健康。</p>
 * @method boolean getIsolate() 获取<p>根据实例隔离状态过滤。false：表示非隔离，true：表示隔离中。</p>
 * @method void setIsolate(boolean $Isolate) 设置<p>根据实例隔离状态过滤。false：表示非隔离，true：表示隔离中。</p>
 * @method array getMetadatas() 获取<p>根据元数据信息过滤。目前只支持一组元数据键值，若传了多个键值对，只会以第一个过滤。</p>
 * @method void setMetadatas(array $Metadatas) 设置<p>根据元数据信息过滤。目前只支持一组元数据键值，若传了多个键值对，只会以第一个过滤。</p>
 * @method integer getOffset() 获取<p>偏移量，默认为0。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为0。</p>
 * @method integer getLimit() 获取<p>返回数量，默认为20，最大值为100。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认为20，最大值为100。</p>
 * @method Location getLocation() 获取<p>地域</p>
 * @method void setLocation(Location $Location) 设置<p>地域</p>
 */
class DescribeGovernanceInstancesRequest extends AbstractModel
{
    /**
     * @var string <p>实例所在的服务名。</p>
     */
    public $Service;

    /**
     * @var string <p>实例所在命名空间名。</p>
     */
    public $Namespace;

    /**
     * @var string <p>tse实例id。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>根据实例ip过滤，多个ip使用英文逗号分隔。</p>
     */
    public $Host;

    /**
     * @var string <p>根据实例版本过滤。</p>
     */
    public $InstanceVersion;

    /**
     * @var string <p>根据实例协议过滤。</p>
     */
    public $Protocol;

    /**
     * @var boolean <p>根据实例健康状态过滤。false：表示不健康，true：表示健康。</p>
     */
    public $HealthStatus;

    /**
     * @var boolean <p>根据实例隔离状态过滤。false：表示非隔离，true：表示隔离中。</p>
     */
    public $Isolate;

    /**
     * @var array <p>根据元数据信息过滤。目前只支持一组元数据键值，若传了多个键值对，只会以第一个过滤。</p>
     */
    public $Metadatas;

    /**
     * @var integer <p>偏移量，默认为0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数量，默认为20，最大值为100。</p>
     */
    public $Limit;

    /**
     * @var Location <p>地域</p>
     */
    public $Location;

    /**
     * @param string $Service <p>实例所在的服务名。</p>
     * @param string $Namespace <p>实例所在命名空间名。</p>
     * @param string $InstanceId <p>tse实例id。</p>
     * @param string $Host <p>根据实例ip过滤，多个ip使用英文逗号分隔。</p>
     * @param string $InstanceVersion <p>根据实例版本过滤。</p>
     * @param string $Protocol <p>根据实例协议过滤。</p>
     * @param boolean $HealthStatus <p>根据实例健康状态过滤。false：表示不健康，true：表示健康。</p>
     * @param boolean $Isolate <p>根据实例隔离状态过滤。false：表示非隔离，true：表示隔离中。</p>
     * @param array $Metadatas <p>根据元数据信息过滤。目前只支持一组元数据键值，若传了多个键值对，只会以第一个过滤。</p>
     * @param integer $Offset <p>偏移量，默认为0。</p>
     * @param integer $Limit <p>返回数量，默认为20，最大值为100。</p>
     * @param Location $Location <p>地域</p>
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
        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("InstanceVersion",$param) and $param["InstanceVersion"] !== null) {
            $this->InstanceVersion = $param["InstanceVersion"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("HealthStatus",$param) and $param["HealthStatus"] !== null) {
            $this->HealthStatus = $param["HealthStatus"];
        }

        if (array_key_exists("Isolate",$param) and $param["Isolate"] !== null) {
            $this->Isolate = $param["Isolate"];
        }

        if (array_key_exists("Metadatas",$param) and $param["Metadatas"] !== null) {
            $this->Metadatas = [];
            foreach ($param["Metadatas"] as $key => $value){
                $obj = new Metadata();
                $obj->deserialize($value);
                array_push($this->Metadatas, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = new Location();
            $this->Location->deserialize($param["Location"]);
        }
    }
}
