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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 页面组件信息
 *
 * @method string getCorpId() 获取uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCorpId(string $CorpId) 设置uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPageId() 获取页面id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageId(string $PageId) 设置页面id
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getWidgetList() 获取组件数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWidgetList(array $WidgetList) 设置组件数组
注意：此字段可能返回 null，表示取不到有效值。
 */
class WidgetListVO extends AbstractModel
{
    /**
     * @var string uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CorpId;

    /**
     * @var string 项目id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 页面id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageId;

    /**
     * @var array 组件数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WidgetList;

    /**
     * @param string $CorpId uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PageId 页面id
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $WidgetList 组件数组
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
        if (array_key_exists("CorpId",$param) and $param["CorpId"] !== null) {
            $this->CorpId = $param["CorpId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PageId",$param) and $param["PageId"] !== null) {
            $this->PageId = $param["PageId"];
        }

        if (array_key_exists("WidgetList",$param) and $param["WidgetList"] !== null) {
            $this->WidgetList = [];
            foreach ($param["WidgetList"] as $key => $value){
                $obj = new WidgetVO();
                $obj->deserialize($value);
                array_push($this->WidgetList, $obj);
            }
        }
    }
}
