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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取任务脚本内容返回体
 *
 * @method string getProjectId() 获取项目编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取任务编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageSize() 获取页内尺寸
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageSize(integer $PageSize) 设置页内尺寸
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageNum() 获取页码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageNum(integer $PageNum) 设置页码
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageTotal() 获取总页数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageTotal(integer $PageTotal) 设置总页数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBase64ScriptContent() 获取分页内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBase64ScriptContent(string $Base64ScriptContent) 设置分页内容
注意：此字段可能返回 null，表示取不到有效值。
 */
class GetPaginationTaskScriptResponseInfo extends AbstractModel
{
    /**
     * @var string 项目编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 任务编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var integer 页内尺寸
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageSize;

    /**
     * @var integer 页码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageNum;

    /**
     * @var integer 总页数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageTotal;

    /**
     * @var string 分页内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Base64ScriptContent;

    /**
     * @param string $ProjectId 项目编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId 任务编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageSize 页内尺寸
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageNum 页码
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageTotal 总页数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Base64ScriptContent 分页内容
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageTotal",$param) and $param["PageTotal"] !== null) {
            $this->PageTotal = $param["PageTotal"];
        }

        if (array_key_exists("Base64ScriptContent",$param) and $param["Base64ScriptContent"] !== null) {
            $this->Base64ScriptContent = $param["Base64ScriptContent"];
        }
    }
}
