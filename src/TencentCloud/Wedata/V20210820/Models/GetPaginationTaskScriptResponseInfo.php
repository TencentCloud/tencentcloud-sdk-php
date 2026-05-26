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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取任务脚本内容返回体
 *
 * @method string getProjectId() 获取<p>项目编号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置<p>项目编号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取<p>任务编号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置<p>任务编号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageSize() 获取<p>页内尺寸</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageSize(integer $PageSize) 设置<p>页内尺寸</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageNum() 获取<p>页码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageNum(integer $PageNum) 设置<p>页码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageTotal() 获取<p>总页数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageTotal(integer $PageTotal) 设置<p>总页数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBase64ScriptContent() 获取<p>分页内容</p><p>分页拉取全部代码内容后，先拼接，再Base64解码获取完整脚本内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBase64ScriptContent(string $Base64ScriptContent) 设置<p>分页内容</p><p>分页拉取全部代码内容后，先拼接，再Base64解码获取完整脚本内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class GetPaginationTaskScriptResponseInfo extends AbstractModel
{
    /**
     * @var string <p>项目编号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string <p>任务编号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var integer <p>页内尺寸</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageSize;

    /**
     * @var integer <p>页码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageNum;

    /**
     * @var integer <p>总页数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageTotal;

    /**
     * @var string <p>分页内容</p><p>分页拉取全部代码内容后，先拼接，再Base64解码获取完整脚本内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Base64ScriptContent;

    /**
     * @param string $ProjectId <p>项目编号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId <p>任务编号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageSize <p>页内尺寸</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageNum <p>页码</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageTotal <p>总页数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Base64ScriptContent <p>分页内容</p><p>分页拉取全部代码内容后，先拼接，再Base64解码获取完整脚本内容</p>
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
