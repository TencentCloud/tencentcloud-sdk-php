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
 * DNA查重估计任务信息。
 *
 * @method string getTaskId() 获取<p>任务 ID。</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务 ID。</p>
 * @method string getStatus() 获取<p>任务状态。</p><p>枚举值：</p><ul><li>WAITING： 等待中</li><li>PROCESSING： 处理中</li><li>FINISH： 已完成</li></ul>
 * @method void setStatus(string $Status) 设置<p>任务状态。</p><p>枚举值：</p><ul><li>WAITING： 等待中</li><li>PROCESSING： 处理中</li><li>FINISH： 已完成</li></ul>
 * @method integer getErrCode() 获取<p>错误码，0 表示成功，其他值表示失败：</p><p>40000：输入参数不合法，请检查输入参数；<br>60000：源文件错误（如视频数据损坏），请确认源文件是否正常；<br>70000：内部服务错误，建议重试。</p>
 * @method void setErrCode(integer $ErrCode) 设置<p>错误码，0 表示成功，其他值表示失败：</p><p>40000：输入参数不合法，请检查输入参数；<br>60000：源文件错误（如视频数据损坏），请确认源文件是否正常；<br>70000：内部服务错误，建议重试。</p>
 * @method string getErrCodeExt() 获取<p>错误码，空字符串表示成功，其他值表示失败，取值请参考 <a href="https://cloud.tencent.com/document/product/266/50368#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81">视频处理类错误码</a> 列表。</p>
 * @method void setErrCodeExt(string $ErrCodeExt) 设置<p>错误码，空字符串表示成功，其他值表示失败，取值请参考 <a href="https://cloud.tencent.com/document/product/266/50368#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81">视频处理类错误码</a> 列表。</p>
 * @method string getMessage() 获取<p>错误信息。</p>
 * @method void setMessage(string $Message) 设置<p>错误信息。</p>
 * @method string getFileId() 获取<p>被检测的媒资 FileId。</p>
 * @method void setFileId(string $FileId) 设置<p>被检测的媒资 FileId。</p>
 * @method array getOutput() 获取<p>查重命中列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutput(array $Output) 设置<p>查重命中列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DNATask extends AbstractModel
{
    /**
     * @var string <p>任务 ID。</p>
     */
    public $TaskId;

    /**
     * @var string <p>任务状态。</p><p>枚举值：</p><ul><li>WAITING： 等待中</li><li>PROCESSING： 处理中</li><li>FINISH： 已完成</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>错误码，0 表示成功，其他值表示失败：</p><p>40000：输入参数不合法，请检查输入参数；<br>60000：源文件错误（如视频数据损坏），请确认源文件是否正常；<br>70000：内部服务错误，建议重试。</p>
     */
    public $ErrCode;

    /**
     * @var string <p>错误码，空字符串表示成功，其他值表示失败，取值请参考 <a href="https://cloud.tencent.com/document/product/266/50368#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81">视频处理类错误码</a> 列表。</p>
     */
    public $ErrCodeExt;

    /**
     * @var string <p>错误信息。</p>
     */
    public $Message;

    /**
     * @var string <p>被检测的媒资 FileId。</p>
     */
    public $FileId;

    /**
     * @var array <p>查重命中列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Output;

    /**
     * @param string $TaskId <p>任务 ID。</p>
     * @param string $Status <p>任务状态。</p><p>枚举值：</p><ul><li>WAITING： 等待中</li><li>PROCESSING： 处理中</li><li>FINISH： 已完成</li></ul>
     * @param integer $ErrCode <p>错误码，0 表示成功，其他值表示失败：</p><p>40000：输入参数不合法，请检查输入参数；<br>60000：源文件错误（如视频数据损坏），请确认源文件是否正常；<br>70000：内部服务错误，建议重试。</p>
     * @param string $ErrCodeExt <p>错误码，空字符串表示成功，其他值表示失败，取值请参考 <a href="https://cloud.tencent.com/document/product/266/50368#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81">视频处理类错误码</a> 列表。</p>
     * @param string $Message <p>错误信息。</p>
     * @param string $FileId <p>被检测的媒资 FileId。</p>
     * @param array $Output <p>查重命中列表。</p>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("ErrCodeExt",$param) and $param["ErrCodeExt"] !== null) {
            $this->ErrCodeExt = $param["ErrCodeExt"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = [];
            foreach ($param["Output"] as $key => $value){
                $obj = new DNATaskOutput();
                $obj->deserialize($value);
                array_push($this->Output, $obj);
            }
        }
    }
}
