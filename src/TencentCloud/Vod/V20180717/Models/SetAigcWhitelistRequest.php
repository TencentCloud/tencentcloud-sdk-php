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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetAigcWhitelist请求参数结构体
 *
 * @method integer getSubAppId() 获取<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method string getAigcType() 获取<p>AIGC任务类型</p><p>枚举值：</p><ul><li>Image： AIGC 生图任务</li><li>Video： AIGC 生视频任务</li></ul>
 * @method void setAigcType(string $AigcType) 设置<p>AIGC任务类型</p><p>枚举值：</p><ul><li>Image： AIGC 生图任务</li><li>Video： AIGC 生视频任务</li></ul>
 * @method string getModelWhitelistSwitch() 获取<p>模型白名单开关</p><p>枚举值：</p><ul><li>ON： 打开，只有允许调用ModelWhitelist中列出的模型</li><li>OFF： 关闭，允许调用所有模型</li></ul>
 * @method void setModelWhitelistSwitch(string $ModelWhitelistSwitch) 设置<p>模型白名单开关</p><p>枚举值：</p><ul><li>ON： 打开，只有允许调用ModelWhitelist中列出的模型</li><li>OFF： 关闭，允许调用所有模型</li></ul>
 * @method string getIpWhitelistSwitch() 获取<p>IP白名单开关</p><p>枚举值：</p><ul><li>ON： 打开，只允许IpWhitelist中列出的IP段进行调用</li><li>OFF： 关闭，允许所有IP进行调用</li></ul>
 * @method void setIpWhitelistSwitch(string $IpWhitelistSwitch) 设置<p>IP白名单开关</p><p>枚举值：</p><ul><li>ON： 打开，只允许IpWhitelist中列出的IP段进行调用</li><li>OFF： 关闭，允许所有IP进行调用</li></ul>
 * @method array getModelWhitelist() 获取<p>模型白名单列表</p>
 * @method void setModelWhitelist(array $ModelWhitelist) 设置<p>模型白名单列表</p>
 * @method array getIpWhitelist() 获取<p>IP白名单的CIDR列表</p>
 * @method void setIpWhitelist(array $IpWhitelist) 设置<p>IP白名单的CIDR列表</p>
 */
class SetAigcWhitelistRequest extends AbstractModel
{
    /**
     * @var integer <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>AIGC任务类型</p><p>枚举值：</p><ul><li>Image： AIGC 生图任务</li><li>Video： AIGC 生视频任务</li></ul>
     */
    public $AigcType;

    /**
     * @var string <p>模型白名单开关</p><p>枚举值：</p><ul><li>ON： 打开，只有允许调用ModelWhitelist中列出的模型</li><li>OFF： 关闭，允许调用所有模型</li></ul>
     */
    public $ModelWhitelistSwitch;

    /**
     * @var string <p>IP白名单开关</p><p>枚举值：</p><ul><li>ON： 打开，只允许IpWhitelist中列出的IP段进行调用</li><li>OFF： 关闭，允许所有IP进行调用</li></ul>
     */
    public $IpWhitelistSwitch;

    /**
     * @var array <p>模型白名单列表</p>
     */
    public $ModelWhitelist;

    /**
     * @var array <p>IP白名单的CIDR列表</p>
     */
    public $IpWhitelist;

    /**
     * @param integer $SubAppId <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     * @param string $AigcType <p>AIGC任务类型</p><p>枚举值：</p><ul><li>Image： AIGC 生图任务</li><li>Video： AIGC 生视频任务</li></ul>
     * @param string $ModelWhitelistSwitch <p>模型白名单开关</p><p>枚举值：</p><ul><li>ON： 打开，只有允许调用ModelWhitelist中列出的模型</li><li>OFF： 关闭，允许调用所有模型</li></ul>
     * @param string $IpWhitelistSwitch <p>IP白名单开关</p><p>枚举值：</p><ul><li>ON： 打开，只允许IpWhitelist中列出的IP段进行调用</li><li>OFF： 关闭，允许所有IP进行调用</li></ul>
     * @param array $ModelWhitelist <p>模型白名单列表</p>
     * @param array $IpWhitelist <p>IP白名单的CIDR列表</p>
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("AigcType",$param) and $param["AigcType"] !== null) {
            $this->AigcType = $param["AigcType"];
        }

        if (array_key_exists("ModelWhitelistSwitch",$param) and $param["ModelWhitelistSwitch"] !== null) {
            $this->ModelWhitelistSwitch = $param["ModelWhitelistSwitch"];
        }

        if (array_key_exists("IpWhitelistSwitch",$param) and $param["IpWhitelistSwitch"] !== null) {
            $this->IpWhitelistSwitch = $param["IpWhitelistSwitch"];
        }

        if (array_key_exists("ModelWhitelist",$param) and $param["ModelWhitelist"] !== null) {
            $this->ModelWhitelist = [];
            foreach ($param["ModelWhitelist"] as $key => $value){
                $obj = new AigcWhitelistModel();
                $obj->deserialize($value);
                array_push($this->ModelWhitelist, $obj);
            }
        }

        if (array_key_exists("IpWhitelist",$param) and $param["IpWhitelist"] !== null) {
            $this->IpWhitelist = $param["IpWhitelist"];
        }
    }
}
