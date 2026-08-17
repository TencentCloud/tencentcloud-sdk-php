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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 客户自有网关集群信息
 *
 * @method string getClusterId() 获取<p>集群 ID。</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群 ID。</p>
 * @method string getClusterName() 获取<p>集群名称。</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名称。</p>
 * @method integer getCreateTime() 获取<p>创建时间。</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间。</p>
 * @method string getPublicIp() 获取<p>公网访问 IP。</p>
 * @method void setPublicIp(string $PublicIp) 设置<p>公网访问 IP。</p>
 * @method integer getInstanceCount() 获取<p>集群下网关实例数量。</p>
 * @method void setInstanceCount(integer $InstanceCount) 设置<p>集群下网关实例数量。</p>
 * @method array getGatewayList() 获取<p>网关列表。</p>
 * @method void setGatewayList(array $GatewayList) 设置<p>网关列表。</p>
 */
class GatewayClusterInfo extends AbstractModel
{
    /**
     * @var string <p>集群 ID。</p>
     */
    public $ClusterId;

    /**
     * @var string <p>集群名称。</p>
     */
    public $ClusterName;

    /**
     * @var integer <p>创建时间。</p>
     */
    public $CreateTime;

    /**
     * @var string <p>公网访问 IP。</p>
     */
    public $PublicIp;

    /**
     * @var integer <p>集群下网关实例数量。</p>
     */
    public $InstanceCount;

    /**
     * @var array <p>网关列表。</p>
     */
    public $GatewayList;

    /**
     * @param string $ClusterId <p>集群 ID。</p>
     * @param string $ClusterName <p>集群名称。</p>
     * @param integer $CreateTime <p>创建时间。</p>
     * @param string $PublicIp <p>公网访问 IP。</p>
     * @param integer $InstanceCount <p>集群下网关实例数量。</p>
     * @param array $GatewayList <p>网关列表。</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("GatewayList",$param) and $param["GatewayList"] !== null) {
            $this->GatewayList = [];
            foreach ($param["GatewayList"] as $key => $value){
                $obj = new GatewayInfo();
                $obj->deserialize($value);
                array_push($this->GatewayList, $obj);
            }
        }
    }
}
