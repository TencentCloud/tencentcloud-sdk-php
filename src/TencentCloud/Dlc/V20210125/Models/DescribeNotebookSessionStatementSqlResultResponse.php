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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNotebookSessionStatementSqlResult返回参数结构体
 *
 * @method string getTaskId() 获取任务Id
 * @method void setTaskId(string $TaskId) 设置任务Id
 * @method string getResultSet() 获取结果数据
 * @method void setResultSet(string $ResultSet) 设置结果数据
 * @method array getResultSchema() 获取schema
 * @method void setResultSchema(array $ResultSchema) 设置schema
 * @method string getNextToken() 获取分页信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNextToken(string $NextToken) 设置分页信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutputPath() 获取存储结果地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputPath(string $OutputPath) 设置存储结果地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUseTime() 获取引擎计算耗时
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUseTime(integer $UseTime) 设置引擎计算耗时
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAffectRows() 获取结果条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAffectRows(integer $AffectRows) 设置结果条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDataAmount() 获取数据扫描量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataAmount(integer $DataAmount) 设置数据扫描量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUiUrl() 获取spark ui地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUiUrl(string $UiUrl) 设置spark ui地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeNotebookSessionStatementSqlResultResponse extends AbstractModel
{
    /**
     * @var string 任务Id
     */
    public $TaskId;

    /**
     * @var string 结果数据
     */
    public $ResultSet;

    /**
     * @var array schema
     */
    public $ResultSchema;

    /**
     * @var string 分页信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NextToken;

    /**
     * @var string 存储结果地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputPath;

    /**
     * @var integer 引擎计算耗时
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UseTime;

    /**
     * @var integer 结果条数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AffectRows;

    /**
     * @var integer 数据扫描量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataAmount;

    /**
     * @var string spark ui地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UiUrl;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TaskId 任务Id
     * @param string $ResultSet 结果数据
     * @param array $ResultSchema schema
     * @param string $NextToken 分页信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutputPath 存储结果地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UseTime 引擎计算耗时
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AffectRows 结果条数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DataAmount 数据扫描量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UiUrl spark ui地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ResultSet",$param) and $param["ResultSet"] !== null) {
            $this->ResultSet = $param["ResultSet"];
        }

        if (array_key_exists("ResultSchema",$param) and $param["ResultSchema"] !== null) {
            $this->ResultSchema = [];
            foreach ($param["ResultSchema"] as $key => $value){
                $obj = new Column();
                $obj->deserialize($value);
                array_push($this->ResultSchema, $obj);
            }
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("OutputPath",$param) and $param["OutputPath"] !== null) {
            $this->OutputPath = $param["OutputPath"];
        }

        if (array_key_exists("UseTime",$param) and $param["UseTime"] !== null) {
            $this->UseTime = $param["UseTime"];
        }

        if (array_key_exists("AffectRows",$param) and $param["AffectRows"] !== null) {
            $this->AffectRows = $param["AffectRows"];
        }

        if (array_key_exists("DataAmount",$param) and $param["DataAmount"] !== null) {
            $this->DataAmount = $param["DataAmount"];
        }

        if (array_key_exists("UiUrl",$param) and $param["UiUrl"] !== null) {
            $this->UiUrl = $param["UiUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
