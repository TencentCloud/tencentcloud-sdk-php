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
 * DescribeSqlTaskResult返回参数结构体
 *
 * @method string getInstanceId() 获取任务实例Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置任务实例Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRecordId() 获取任务提交记录Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordId(integer $RecordId) 设置任务提交记录Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDetailId() 获取子任务执行记录Id
 * @method void setDetailId(integer $DetailId) 设置子任务执行记录Id
 * @method boolean getResultSet() 获取是否是结果集
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultSet(boolean $ResultSet) 设置是否是结果集
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResultContent() 获取结果内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultContent(string $ResultContent) 设置结果内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFieldList() 获取字段集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFieldList(array $FieldList) 设置字段集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSqlTaskResultResponse extends AbstractModel
{
    /**
     * @var string 任务实例Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var integer 任务提交记录Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordId;

    /**
     * @var integer 子任务执行记录Id
     */
    public $DetailId;

    /**
     * @var boolean 是否是结果集
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultSet;

    /**
     * @var string 结果内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultContent;

    /**
     * @var array 字段集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FieldList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $InstanceId 任务实例Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RecordId 任务提交记录Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DetailId 子任务执行记录Id
     * @param boolean $ResultSet 是否是结果集
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResultContent 结果内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FieldList 字段集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("DetailId",$param) and $param["DetailId"] !== null) {
            $this->DetailId = $param["DetailId"];
        }

        if (array_key_exists("ResultSet",$param) and $param["ResultSet"] !== null) {
            $this->ResultSet = $param["ResultSet"];
        }

        if (array_key_exists("ResultContent",$param) and $param["ResultContent"] !== null) {
            $this->ResultContent = $param["ResultContent"];
        }

        if (array_key_exists("FieldList",$param) and $param["FieldList"] !== null) {
            $this->FieldList = $param["FieldList"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
