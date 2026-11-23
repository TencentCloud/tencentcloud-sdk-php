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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCustomGroup请求参数结构体
 *
 * @method string getZoneId() 获取<p>站点 ID。</p>
 * @method void setZoneId(string $ZoneId) 设置<p>站点 ID。</p>
 * @method string getGroupName() 获取<p>自定义组名称。</p>
 * @method void setGroupName(string $GroupName) 设置<p>自定义组名称。</p>
 * @method string getGroupType() 获取<p>自定义组类型。创建后不可修改，不同类型的自定义组支持的条目类型不同。</p><p>枚举值：</p><ul><li>TLSFingerprint： TLS 指纹组，支持 JA3、JA4 类型的条目</li><li>UA： UA 组，支持 UA 类型的条目</li><li>Referer： Referer 组，支持 Referer 类型的条目</li></ul>
 * @method void setGroupType(string $GroupType) 设置<p>自定义组类型。创建后不可修改，不同类型的自定义组支持的条目类型不同。</p><p>枚举值：</p><ul><li>TLSFingerprint： TLS 指纹组，支持 JA3、JA4 类型的条目</li><li>UA： UA 组，支持 UA 类型的条目</li><li>Referer： Referer 组，支持 Referer 类型的条目</li></ul>
 * @method array getGroupItems() 获取<p>自定义组条目列表。</p>
 * @method void setGroupItems(array $GroupItems) 设置<p>自定义组条目列表。</p>
 */
class CreateCustomGroupRequest extends AbstractModel
{
    /**
     * @var string <p>站点 ID。</p>
     */
    public $ZoneId;

    /**
     * @var string <p>自定义组名称。</p>
     */
    public $GroupName;

    /**
     * @var string <p>自定义组类型。创建后不可修改，不同类型的自定义组支持的条目类型不同。</p><p>枚举值：</p><ul><li>TLSFingerprint： TLS 指纹组，支持 JA3、JA4 类型的条目</li><li>UA： UA 组，支持 UA 类型的条目</li><li>Referer： Referer 组，支持 Referer 类型的条目</li></ul>
     */
    public $GroupType;

    /**
     * @var array <p>自定义组条目列表。</p>
     */
    public $GroupItems;

    /**
     * @param string $ZoneId <p>站点 ID。</p>
     * @param string $GroupName <p>自定义组名称。</p>
     * @param string $GroupType <p>自定义组类型。创建后不可修改，不同类型的自定义组支持的条目类型不同。</p><p>枚举值：</p><ul><li>TLSFingerprint： TLS 指纹组，支持 JA3、JA4 类型的条目</li><li>UA： UA 组，支持 UA 类型的条目</li><li>Referer： Referer 组，支持 Referer 类型的条目</li></ul>
     * @param array $GroupItems <p>自定义组条目列表。</p>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("GroupItems",$param) and $param["GroupItems"] !== null) {
            $this->GroupItems = [];
            foreach ($param["GroupItems"] as $key => $value){
                $obj = new CustomGroupItem();
                $obj->deserialize($value);
                array_push($this->GroupItems, $obj);
            }
        }
    }
}
