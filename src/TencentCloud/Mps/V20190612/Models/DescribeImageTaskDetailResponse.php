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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeImageTaskDetail返回参数结构体
 *
 * @method string getTaskType() 获取<p>任务类型，目前取值有：</p><li>WorkflowTask：工作流处理任务。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskType(string $TaskType) 设置<p>任务类型，目前取值有：</p><li>WorkflowTask：工作流处理任务。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>任务状态，取值：</p><li>WAITING：等待中；</li><li>PROCESSING：处理中；</li><li>FINISH：已完成。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置<p>任务状态，取值：</p><li>WAITING：等待中；</li><li>PROCESSING：处理中；</li><li>FINISH：已完成。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getErrCode() 获取<p>任务失败时的错误码。</p>
 * @method void setErrCode(integer $ErrCode) 设置<p>任务失败时的错误码。</p>
 * @method string getErrMsg() 获取<p>错误码，空字符串表示成功，其他值表示失败，取值请参考 <a href="https://cloud.tencent.com/document/product/862/50369#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81">媒体处理类错误码</a> 列表。</p>
 * @method void setErrMsg(string $ErrMsg) 设置<p>错误码，空字符串表示成功，其他值表示失败，取值请参考 <a href="https://cloud.tencent.com/document/product/862/50369#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81">媒体处理类错误码</a> 列表。</p>
 * @method string getMessage() 获取<p>任务异常Message。</p>
 * @method void setMessage(string $Message) 设置<p>任务异常Message。</p>
 * @method array getImageProcessTaskResultSet() 获取<p>图片处理任务的执行状态与结果。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageProcessTaskResultSet(array $ImageProcessTaskResultSet) 设置<p>图片处理任务的执行状态与结果。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>任务的创建时间，采用 <a href="https://cloud.tencent.com/document/product/862/37710#52">ISO 日期格式</a>。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>任务的创建时间，采用 <a href="https://cloud.tencent.com/document/product/862/37710#52">ISO 日期格式</a>。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFinishTime() 获取<p>任务执行完毕的时间，采用 <a href="https://cloud.tencent.com/document/product/862/37710#52">ISO 日期格式</a>。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFinishTime(string $FinishTime) 设置<p>任务执行完毕的时间，采用 <a href="https://cloud.tencent.com/document/product/862/37710#52">ISO 日期格式</a>。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDefinition() 获取<p>模板唯一标识。</p>
 * @method void setDefinition(integer $Definition) 设置<p>模板唯一标识。</p>
 * @method ImageTaskInput getImageTask() 获取<p>任务发起参数。</p>
 * @method void setImageTask(ImageTaskInput $ImageTask) 设置<p>任务发起参数。</p>
 * @method MediaInputInfo getInputInfo() 获取<p>图片任务输入信息。</p>
 * @method void setInputInfo(MediaInputInfo $InputInfo) 设置<p>图片任务输入信息。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeImageTaskDetailResponse extends AbstractModel
{
    /**
     * @var string <p>任务类型，目前取值有：</p><li>WorkflowTask：工作流处理任务。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskType;

    /**
     * @var string <p>任务状态，取值：</p><li>WAITING：等待中；</li><li>PROCESSING：处理中；</li><li>FINISH：已完成。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer <p>任务失败时的错误码。</p>
     */
    public $ErrCode;

    /**
     * @var string <p>错误码，空字符串表示成功，其他值表示失败，取值请参考 <a href="https://cloud.tencent.com/document/product/862/50369#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81">媒体处理类错误码</a> 列表。</p>
     */
    public $ErrMsg;

    /**
     * @var string <p>任务异常Message。</p>
     */
    public $Message;

    /**
     * @var array <p>图片处理任务的执行状态与结果。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageProcessTaskResultSet;

    /**
     * @var string <p>任务的创建时间，采用 <a href="https://cloud.tencent.com/document/product/862/37710#52">ISO 日期格式</a>。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>任务执行完毕的时间，采用 <a href="https://cloud.tencent.com/document/product/862/37710#52">ISO 日期格式</a>。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FinishTime;

    /**
     * @var integer <p>模板唯一标识。</p>
     */
    public $Definition;

    /**
     * @var ImageTaskInput <p>任务发起参数。</p>
     */
    public $ImageTask;

    /**
     * @var MediaInputInfo <p>图片任务输入信息。</p>
     */
    public $InputInfo;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TaskType <p>任务类型，目前取值有：</p><li>WorkflowTask：工作流处理任务。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>任务状态，取值：</p><li>WAITING：等待中；</li><li>PROCESSING：处理中；</li><li>FINISH：已完成。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ErrCode <p>任务失败时的错误码。</p>
     * @param string $ErrMsg <p>错误码，空字符串表示成功，其他值表示失败，取值请参考 <a href="https://cloud.tencent.com/document/product/862/50369#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81">媒体处理类错误码</a> 列表。</p>
     * @param string $Message <p>任务异常Message。</p>
     * @param array $ImageProcessTaskResultSet <p>图片处理任务的执行状态与结果。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>任务的创建时间，采用 <a href="https://cloud.tencent.com/document/product/862/37710#52">ISO 日期格式</a>。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FinishTime <p>任务执行完毕的时间，采用 <a href="https://cloud.tencent.com/document/product/862/37710#52">ISO 日期格式</a>。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Definition <p>模板唯一标识。</p>
     * @param ImageTaskInput $ImageTask <p>任务发起参数。</p>
     * @param MediaInputInfo $InputInfo <p>图片任务输入信息。</p>
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("ImageProcessTaskResultSet",$param) and $param["ImageProcessTaskResultSet"] !== null) {
            $this->ImageProcessTaskResultSet = [];
            foreach ($param["ImageProcessTaskResultSet"] as $key => $value){
                $obj = new ImageProcessTaskResult();
                $obj->deserialize($value);
                array_push($this->ImageProcessTaskResultSet, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("ImageTask",$param) and $param["ImageTask"] !== null) {
            $this->ImageTask = new ImageTaskInput();
            $this->ImageTask->deserialize($param["ImageTask"]);
        }

        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new MediaInputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
