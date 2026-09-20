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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 直播审核标签分组数据
 *
 * @method string getGroupClassName() 获取<p>标签组分类中文名。</p>
 * @method void setGroupClassName(string $GroupClassName) 设置<p>标签组分类中文名。</p>
 * @method string getGroupClassEname() 获取<p>标签组分类英文名。</p>
 * @method void setGroupClassEname(string $GroupClassEname) 设置<p>标签组分类英文名。</p>
 * @method array getLabelGroupList() 获取<p>标签组列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelGroupList(array $LabelGroupList) 设置<p>标签组列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class AuditGroupClassInfo extends AbstractModel
{
    /**
     * @var string <p>标签组分类中文名。</p>
     */
    public $GroupClassName;

    /**
     * @var string <p>标签组分类英文名。</p>
     */
    public $GroupClassEname;

    /**
     * @var array <p>标签组列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelGroupList;

    /**
     * @param string $GroupClassName <p>标签组分类中文名。</p>
     * @param string $GroupClassEname <p>标签组分类英文名。</p>
     * @param array $LabelGroupList <p>标签组列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("GroupClassName",$param) and $param["GroupClassName"] !== null) {
            $this->GroupClassName = $param["GroupClassName"];
        }

        if (array_key_exists("GroupClassEname",$param) and $param["GroupClassEname"] !== null) {
            $this->GroupClassEname = $param["GroupClassEname"];
        }

        if (array_key_exists("LabelGroupList",$param) and $param["LabelGroupList"] !== null) {
            $this->LabelGroupList = [];
            foreach ($param["LabelGroupList"] as $key => $value){
                $obj = new AuditLabelGroupInfo();
                $obj->deserialize($value);
                array_push($this->LabelGroupList, $obj);
            }
        }
    }
}
