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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 终端节点信息列表
 *
 * @method string getEndPointId() 获取终端节点ID
 * @method void setEndPointId(string $EndPointId) 设置终端节点ID
 * @method string getEndPointName() 获取名称
 * @method void setEndPointName(string $EndPointName) 设置名称
 * @method string getUniqVpcId() 获取vpcid
 * @method void setUniqVpcId(string $UniqVpcId) 设置vpcid
 * @method string getCreatedAt() 获取创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
 * @method string getUpdatedAt() 获取更新时间
 * @method void setUpdatedAt(string $UpdatedAt) 设置更新时间
 * @method array getEndPointService() 获取终端节点信息
 * @method void setEndPointService(array $EndPointService) 设置终端节点信息
 */
class InboundEndpointSet extends AbstractModel
{
    /**
     * @var string 终端节点ID
     */
    public $EndPointId;

    /**
     * @var string 名称
     */
    public $EndPointName;

    /**
     * @var string vpcid
     */
    public $UniqVpcId;

    /**
     * @var string 创建时间
     */
    public $CreatedAt;

    /**
     * @var string 更新时间
     */
    public $UpdatedAt;

    /**
     * @var array 终端节点信息
     */
    public $EndPointService;

    /**
     * @param string $EndPointId 终端节点ID
     * @param string $EndPointName 名称
     * @param string $UniqVpcId vpcid
     * @param string $CreatedAt 创建时间
     * @param string $UpdatedAt 更新时间
     * @param array $EndPointService 终端节点信息
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
        if (array_key_exists("EndPointId",$param) and $param["EndPointId"] !== null) {
            $this->EndPointId = $param["EndPointId"];
        }

        if (array_key_exists("EndPointName",$param) and $param["EndPointName"] !== null) {
            $this->EndPointName = $param["EndPointName"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("EndPointService",$param) and $param["EndPointService"] !== null) {
            $this->EndPointService = [];
            foreach ($param["EndPointService"] as $key => $value){
                $obj = new EndPointServiceInfo();
                $obj->deserialize($value);
                array_push($this->EndPointService, $obj);
            }
        }
    }
}
