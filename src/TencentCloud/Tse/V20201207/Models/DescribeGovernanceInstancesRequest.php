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
 * @method string getService() 获取实例所在的服务名。
 * @method void setService(string $Service) 设置实例所在的服务名。
 * @method string getNamespace() 获取实例所在命名空间名。
 * @method void setNamespace(string $Namespace) 设置实例所在命名空间名。
 * @method string getInstanceId() 获取tse实例id。
 * @method void setInstanceId(string $InstanceId) 设置tse实例id。
 * @method string getHost() 获取根据实例ip过滤，多个ip使用英文逗号分隔。
 * @method void setHost(string $Host) 设置根据实例ip过滤，多个ip使用英文逗号分隔。
 * @method string getInstanceVersion() 获取根据实例版本过滤。
 * @method void setInstanceVersion(string $InstanceVersion) 设置根据实例版本过滤。
 * @method string getProtocol() 获取根据实例协议过滤。
 * @method void setProtocol(string $Protocol) 设置根据实例协议过滤。
 * @method boolean getHealthStatus() 获取根据实例健康状态过滤。false：表示不健康，true：表示健康。
 * @method void setHealthStatus(boolean $HealthStatus) 设置根据实例健康状态过滤。false：表示不健康，true：表示健康。
 * @method boolean getIsolate() 获取根据实例隔离状态过滤。false：表示非隔离，true：表示隔离中。
 * @method void setIsolate(boolean $Isolate) 设置根据实例隔离状态过滤。false：表示非隔离，true：表示隔离中。
 * @method array getMetadatas() 获取根据元数据信息过滤。目前只支持一组元数据键值，若传了多个键值对，只会以第一个过滤。
 * @method void setMetadatas(array $Metadatas) 设置根据元数据信息过滤。目前只支持一组元数据键值，若传了多个键值对，只会以第一个过滤。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。
 * @method Location getLocation() 获取地域
 * @method void setLocation(Location $Location) 设置地域
 */
class DescribeGovernanceInstancesRequest extends AbstractModel
{
    /**
     * @var string 实例所在的服务名。
     */
    public $Service;

    /**
     * @var string 实例所在命名空间名。
     */
    public $Namespace;

    /**
     * @var string tse实例id。
     */
    public $InstanceId;

    /**
     * @var string 根据实例ip过滤，多个ip使用英文逗号分隔。
     */
    public $Host;

    /**
     * @var string 根据实例版本过滤。
     */
    public $InstanceVersion;

    /**
     * @var string 根据实例协议过滤。
     */
    public $Protocol;

    /**
     * @var boolean 根据实例健康状态过滤。false：表示不健康，true：表示健康。
     */
    public $HealthStatus;

    /**
     * @var boolean 根据实例隔离状态过滤。false：表示非隔离，true：表示隔离中。
     */
    public $Isolate;

    /**
     * @var array 根据元数据信息过滤。目前只支持一组元数据键值，若传了多个键值对，只会以第一个过滤。
     */
    public $Metadatas;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大值为100。
     */
    public $Limit;

    /**
     * @var Location 地域
     */
    public $Location;

    /**
     * @param string $Service 实例所在的服务名。
     * @param string $Namespace 实例所在命名空间名。
     * @param string $InstanceId tse实例id。
     * @param string $Host 根据实例ip过滤，多个ip使用英文逗号分隔。
     * @param string $InstanceVersion 根据实例版本过滤。
     * @param string $Protocol 根据实例协议过滤。
     * @param boolean $HealthStatus 根据实例健康状态过滤。false：表示不健康，true：表示健康。
     * @param boolean $Isolate 根据实例隔离状态过滤。false：表示非隔离，true：表示隔离中。
     * @param array $Metadatas 根据元数据信息过滤。目前只支持一组元数据键值，若传了多个键值对，只会以第一个过滤。
     * @param integer $Offset 偏移量，默认为0。
     * @param integer $Limit 返回数量，默认为20，最大值为100。
     * @param Location $Location 地域
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
