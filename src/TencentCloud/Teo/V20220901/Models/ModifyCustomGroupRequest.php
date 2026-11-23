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
 * ModifyCustomGroup请求参数结构体
 *
 * @method string getZoneId() 获取<p>站点 ID。</p>
 * @method void setZoneId(string $ZoneId) 设置<p>站点 ID。</p>
 * @method string getGroupId() 获取<p>自定义组唯一标识 ID。</p>
 * @method void setGroupId(string $GroupId) 设置<p>自定义组唯一标识 ID。</p>
 * @method string getGroupName() 获取<p>自定义组名称。该字段不填时则保留原值。</p>
 * @method void setGroupName(string $GroupName) 设置<p>自定义组名称。该字段不填时则保留原值。</p>
 * @method string getGroupItemOperation() 获取<p>指定本次对 GroupItems 的更新方式。</p><p>枚举值：</p><ul><li>Replace： 使用 GroupItems 全量替换原有条目列表</li><li>Append： 追加 GroupItems 到组条目列表中</li><li>Remove： 从原有条目列表中移除与 GroupItems 中 Content 和 ItemType 均相同的条目。若指定条目不存在，则忽略该条目</li></ul><p>默认值：Replace</p>
 * @method void setGroupItemOperation(string $GroupItemOperation) 设置<p>指定本次对 GroupItems 的更新方式。</p><p>枚举值：</p><ul><li>Replace： 使用 GroupItems 全量替换原有条目列表</li><li>Append： 追加 GroupItems 到组条目列表中</li><li>Remove： 从原有条目列表中移除与 GroupItems 中 Content 和 ItemType 均相同的条目。若指定条目不存在，则忽略该条目</li></ul><p>默认值：Replace</p>
 * @method array getGroupItems() 获取<p>自定义组条目列表。该字段不填时则保留原值。</p>
 * @method void setGroupItems(array $GroupItems) 设置<p>自定义组条目列表。该字段不填时则保留原值。</p>
 */
class ModifyCustomGroupRequest extends AbstractModel
{
    /**
     * @var string <p>站点 ID。</p>
     */
    public $ZoneId;

    /**
     * @var string <p>自定义组唯一标识 ID。</p>
     */
    public $GroupId;

    /**
     * @var string <p>自定义组名称。该字段不填时则保留原值。</p>
     */
    public $GroupName;

    /**
     * @var string <p>指定本次对 GroupItems 的更新方式。</p><p>枚举值：</p><ul><li>Replace： 使用 GroupItems 全量替换原有条目列表</li><li>Append： 追加 GroupItems 到组条目列表中</li><li>Remove： 从原有条目列表中移除与 GroupItems 中 Content 和 ItemType 均相同的条目。若指定条目不存在，则忽略该条目</li></ul><p>默认值：Replace</p>
     */
    public $GroupItemOperation;

    /**
     * @var array <p>自定义组条目列表。该字段不填时则保留原值。</p>
     */
    public $GroupItems;

    /**
     * @param string $ZoneId <p>站点 ID。</p>
     * @param string $GroupId <p>自定义组唯一标识 ID。</p>
     * @param string $GroupName <p>自定义组名称。该字段不填时则保留原值。</p>
     * @param string $GroupItemOperation <p>指定本次对 GroupItems 的更新方式。</p><p>枚举值：</p><ul><li>Replace： 使用 GroupItems 全量替换原有条目列表</li><li>Append： 追加 GroupItems 到组条目列表中</li><li>Remove： 从原有条目列表中移除与 GroupItems 中 Content 和 ItemType 均相同的条目。若指定条目不存在，则忽略该条目</li></ul><p>默认值：Replace</p>
     * @param array $GroupItems <p>自定义组条目列表。该字段不填时则保留原值。</p>
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

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("GroupItemOperation",$param) and $param["GroupItemOperation"] !== null) {
            $this->GroupItemOperation = $param["GroupItemOperation"];
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
