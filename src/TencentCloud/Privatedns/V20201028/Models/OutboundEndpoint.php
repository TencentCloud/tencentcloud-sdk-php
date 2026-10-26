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
 * 出站终端节点
 *
 * @method string getEndpointId() 获取出站终端节点ID
 * @method void setEndpointId(string $EndpointId) 设置出站终端节点ID
 * @method string getEndpointName() 获取出站终端节点名
 * @method void setEndpointName(string $EndpointName) 设置出站终端节点名
 * @method string getRegion() 获取出站终端节点所属地域
 * @method void setRegion(string $Region) 设置出站终端节点所属地域
 * @method array getTags() 获取tag标签
 * @method void setTags(array $Tags) 设置tag标签
 * @method array getEndpointServiceSet() 获取出站终端节点信息
仅在转发架构为 V2R的情况下返回
 * @method void setEndpointServiceSet(array $EndpointServiceSet) 设置出站终端节点信息
仅在转发架构为 V2R的情况下返回
 * @method string getForwardLinkArch() 获取转发链接架构
V2V: privatelink
V2R: jnsgw
 * @method void setForwardLinkArch(string $ForwardLinkArch) 设置转发链接架构
V2V: privatelink
V2R: jnsgw
 * @method string getEndPointServiceId() 获取终端节点服务ID
仅在转发架构为 V2V的情况下返回

 * @method void setEndPointServiceId(string $EndPointServiceId) 设置终端节点服务ID
仅在转发架构为 V2V的情况下返回

 * @method array getEndPointVipSet() 获取终端节点VIP列表
仅在转发架构为 V2V的情况下返回
 * @method void setEndPointVipSet(array $EndPointVipSet) 设置终端节点VIP列表
仅在转发架构为 V2V的情况下返回
 */
class OutboundEndpoint extends AbstractModel
{
    /**
     * @var string 出站终端节点ID
     */
    public $EndpointId;

    /**
     * @var string 出站终端节点名
     */
    public $EndpointName;

    /**
     * @var string 出站终端节点所属地域
     */
    public $Region;

    /**
     * @var array tag标签
     */
    public $Tags;

    /**
     * @var array 出站终端节点信息
仅在转发架构为 V2R的情况下返回
     */
    public $EndpointServiceSet;

    /**
     * @var string 转发链接架构
V2V: privatelink
V2R: jnsgw
     */
    public $ForwardLinkArch;

    /**
     * @var string 终端节点服务ID
仅在转发架构为 V2V的情况下返回

     */
    public $EndPointServiceId;

    /**
     * @var array 终端节点VIP列表
仅在转发架构为 V2V的情况下返回
     */
    public $EndPointVipSet;

    /**
     * @param string $EndpointId 出站终端节点ID
     * @param string $EndpointName 出站终端节点名
     * @param string $Region 出站终端节点所属地域
     * @param array $Tags tag标签
     * @param array $EndpointServiceSet 出站终端节点信息
仅在转发架构为 V2R的情况下返回
     * @param string $ForwardLinkArch 转发链接架构
V2V: privatelink
V2R: jnsgw
     * @param string $EndPointServiceId 终端节点服务ID
仅在转发架构为 V2V的情况下返回

     * @param array $EndPointVipSet 终端节点VIP列表
仅在转发架构为 V2V的情况下返回
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
        if (array_key_exists("EndpointId",$param) and $param["EndpointId"] !== null) {
            $this->EndpointId = $param["EndpointId"];
        }

        if (array_key_exists("EndpointName",$param) and $param["EndpointName"] !== null) {
            $this->EndpointName = $param["EndpointName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("EndpointServiceSet",$param) and $param["EndpointServiceSet"] !== null) {
            $this->EndpointServiceSet = [];
            foreach ($param["EndpointServiceSet"] as $key => $value){
                $obj = new EndpointService();
                $obj->deserialize($value);
                array_push($this->EndpointServiceSet, $obj);
            }
        }

        if (array_key_exists("ForwardLinkArch",$param) and $param["ForwardLinkArch"] !== null) {
            $this->ForwardLinkArch = $param["ForwardLinkArch"];
        }

        if (array_key_exists("EndPointServiceId",$param) and $param["EndPointServiceId"] !== null) {
            $this->EndPointServiceId = $param["EndPointServiceId"];
        }

        if (array_key_exists("EndPointVipSet",$param) and $param["EndPointVipSet"] !== null) {
            $this->EndPointVipSet = $param["EndPointVipSet"];
        }
    }
}
