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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * vpc间防火墙规则生效范围列表
 *
 * @method string getEdgeId() 获取规则生效的范围id，是在哪对vpc之间还是针对所有vpc间生效
 * @method void setEdgeId(string $EdgeId) 设置规则生效的范围id，是在哪对vpc之间还是针对所有vpc间生效
 * @method string getEdgeName() 获取EdgeId对应的名称
 * @method void setEdgeName(string $EdgeName) 设置EdgeId对应的名称
 * @method string getSrcId() 获取本端网络实例Id
 * @method void setSrcId(string $SrcId) 设置本端网络实例Id
 * @method string getSrcRegion() 获取本端网络实例所属地域
 * @method void setSrcRegion(string $SrcRegion) 设置本端网络实例所属地域
 * @method string getSrcName() 获取本端网络实例名称
 * @method void setSrcName(string $SrcName) 设置本端网络实例名称
 * @method string getSrcCidr() 获取本端网络实例cidr，多个以逗号分隔
 * @method void setSrcCidr(string $SrcCidr) 设置本端网络实例cidr，多个以逗号分隔
 * @method string getDstId() 获取对端网络实例Id
 * @method void setDstId(string $DstId) 设置对端网络实例Id
 * @method string getDstRegion() 获取对端网络实例所属地域
 * @method void setDstRegion(string $DstRegion) 设置对端网络实例所属地域
 * @method string getDstName() 获取对端网络实例名称
 * @method void setDstName(string $DstName) 设置对端网络实例名称
 * @method string getDstCidr() 获取对端网络实例cidr，多个以逗号分隔
 * @method void setDstCidr(string $DstCidr) 设置对端网络实例cidr，多个以逗号分隔
 */
class EdgeRange extends AbstractModel
{
    /**
     * @var string 规则生效的范围id，是在哪对vpc之间还是针对所有vpc间生效
     */
    public $EdgeId;

    /**
     * @var string EdgeId对应的名称
     */
    public $EdgeName;

    /**
     * @var string 本端网络实例Id
     */
    public $SrcId;

    /**
     * @var string 本端网络实例所属地域
     */
    public $SrcRegion;

    /**
     * @var string 本端网络实例名称
     */
    public $SrcName;

    /**
     * @var string 本端网络实例cidr，多个以逗号分隔
     */
    public $SrcCidr;

    /**
     * @var string 对端网络实例Id
     */
    public $DstId;

    /**
     * @var string 对端网络实例所属地域
     */
    public $DstRegion;

    /**
     * @var string 对端网络实例名称
     */
    public $DstName;

    /**
     * @var string 对端网络实例cidr，多个以逗号分隔
     */
    public $DstCidr;

    /**
     * @param string $EdgeId 规则生效的范围id，是在哪对vpc之间还是针对所有vpc间生效
     * @param string $EdgeName EdgeId对应的名称
     * @param string $SrcId 本端网络实例Id
     * @param string $SrcRegion 本端网络实例所属地域
     * @param string $SrcName 本端网络实例名称
     * @param string $SrcCidr 本端网络实例cidr，多个以逗号分隔
     * @param string $DstId 对端网络实例Id
     * @param string $DstRegion 对端网络实例所属地域
     * @param string $DstName 对端网络实例名称
     * @param string $DstCidr 对端网络实例cidr，多个以逗号分隔
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
        if (array_key_exists("EdgeId",$param) and $param["EdgeId"] !== null) {
            $this->EdgeId = $param["EdgeId"];
        }

        if (array_key_exists("EdgeName",$param) and $param["EdgeName"] !== null) {
            $this->EdgeName = $param["EdgeName"];
        }

        if (array_key_exists("SrcId",$param) and $param["SrcId"] !== null) {
            $this->SrcId = $param["SrcId"];
        }

        if (array_key_exists("SrcRegion",$param) and $param["SrcRegion"] !== null) {
            $this->SrcRegion = $param["SrcRegion"];
        }

        if (array_key_exists("SrcName",$param) and $param["SrcName"] !== null) {
            $this->SrcName = $param["SrcName"];
        }

        if (array_key_exists("SrcCidr",$param) and $param["SrcCidr"] !== null) {
            $this->SrcCidr = $param["SrcCidr"];
        }

        if (array_key_exists("DstId",$param) and $param["DstId"] !== null) {
            $this->DstId = $param["DstId"];
        }

        if (array_key_exists("DstRegion",$param) and $param["DstRegion"] !== null) {
            $this->DstRegion = $param["DstRegion"];
        }

        if (array_key_exists("DstName",$param) and $param["DstName"] !== null) {
            $this->DstName = $param["DstName"];
        }

        if (array_key_exists("DstCidr",$param) and $param["DstCidr"] !== null) {
            $this->DstCidr = $param["DstCidr"];
        }
    }
}
