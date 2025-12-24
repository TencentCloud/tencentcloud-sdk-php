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
namespace TencentCloud\Chdfs\V20201112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAccessGroups请求参数结构体
 *
 * @method string getVpcId() 获取VPC网络ID
备注：入参只能指定VpcId和OwnerUin的其中一个
 * @method void setVpcId(string $VpcId) 设置VPC网络ID
备注：入参只能指定VpcId和OwnerUin的其中一个
 * @method integer getOwnerUin() 获取资源所属者Uin
 * @method void setOwnerUin(integer $OwnerUin) 设置资源所属者Uin
 * @method string getAccessGroupIdMarker() 获取起始权限组ID标记
 * @method void setAccessGroupIdMarker(string $AccessGroupIdMarker) 设置起始权限组ID标记
 */
class DescribeAccessGroupsRequest extends AbstractModel
{
    /**
     * @var string VPC网络ID
备注：入参只能指定VpcId和OwnerUin的其中一个
     */
    public $VpcId;

    /**
     * @var integer 资源所属者Uin
     */
    public $OwnerUin;

    /**
     * @var string 起始权限组ID标记
     */
    public $AccessGroupIdMarker;

    /**
     * @param string $VpcId VPC网络ID
备注：入参只能指定VpcId和OwnerUin的其中一个
     * @param integer $OwnerUin 资源所属者Uin
     * @param string $AccessGroupIdMarker 起始权限组ID标记
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("AccessGroupIdMarker",$param) and $param["AccessGroupIdMarker"] !== null) {
            $this->AccessGroupIdMarker = $param["AccessGroupIdMarker"];
        }
    }
}
