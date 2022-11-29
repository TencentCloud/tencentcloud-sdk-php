<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIpStatus请求参数结构体
 *
 * @method string getDomain() 获取加速域名
 * @method void setDomain(string $Domain) 设置加速域名
 * @method string getLayer() 获取节点类型：
edge：表示边缘节点
last：表示回源层节点
不填充情况下，默认返回边缘节点信息
 * @method void setLayer(string $Layer) 设置节点类型：
edge：表示边缘节点
last：表示回源层节点
不填充情况下，默认返回边缘节点信息
 * @method string getArea() 获取查询区域：
mainland: 国内节点
overseas: 海外节点
global: 全球节点
 * @method void setArea(string $Area) 设置查询区域：
mainland: 国内节点
overseas: 海外节点
global: 全球节点
 * @method boolean getSegment() 获取是否以IP段的格式返回。
 * @method void setSegment(boolean $Segment) 设置是否以IP段的格式返回。
 * @method boolean getShowIpv6() 获取是否查询节点 IPV6 信息。
 * @method void setShowIpv6(boolean $ShowIpv6) 设置是否查询节点 IPV6 信息。
 * @method boolean getAbbreviationIpv6() 获取是否对IPV6进行缩写。
 * @method void setAbbreviationIpv6(boolean $AbbreviationIpv6) 设置是否对IPV6进行缩写。
 */
class DescribeIpStatusRequest extends AbstractModel
{
    /**
     * @var string 加速域名
     */
    public $Domain;

    /**
     * @var string 节点类型：
edge：表示边缘节点
last：表示回源层节点
不填充情况下，默认返回边缘节点信息
     */
    public $Layer;

    /**
     * @var string 查询区域：
mainland: 国内节点
overseas: 海外节点
global: 全球节点
     */
    public $Area;

    /**
     * @var boolean 是否以IP段的格式返回。
     */
    public $Segment;

    /**
     * @var boolean 是否查询节点 IPV6 信息。
     */
    public $ShowIpv6;

    /**
     * @var boolean 是否对IPV6进行缩写。
     */
    public $AbbreviationIpv6;

    /**
     * @param string $Domain 加速域名
     * @param string $Layer 节点类型：
edge：表示边缘节点
last：表示回源层节点
不填充情况下，默认返回边缘节点信息
     * @param string $Area 查询区域：
mainland: 国内节点
overseas: 海外节点
global: 全球节点
     * @param boolean $Segment 是否以IP段的格式返回。
     * @param boolean $ShowIpv6 是否查询节点 IPV6 信息。
     * @param boolean $AbbreviationIpv6 是否对IPV6进行缩写。
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Layer",$param) and $param["Layer"] !== null) {
            $this->Layer = $param["Layer"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Segment",$param) and $param["Segment"] !== null) {
            $this->Segment = $param["Segment"];
        }

        if (array_key_exists("ShowIpv6",$param) and $param["ShowIpv6"] !== null) {
            $this->ShowIpv6 = $param["ShowIpv6"];
        }

        if (array_key_exists("AbbreviationIpv6",$param) and $param["AbbreviationIpv6"] !== null) {
            $this->AbbreviationIpv6 = $param["AbbreviationIpv6"];
        }
    }
}
