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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePPTCheck返回参数结构体
 *
 * @method string getTaskId() 获取任务的唯一标识Id
 * @method void setTaskId(string $TaskId) 设置任务的唯一标识Id
 * @method boolean getIsOK() 获取PPT文件是否正常
 * @method void setIsOK(boolean $IsOK) 设置PPT文件是否正常
 * @method string getResultUrl() 获取修复后的PPT URL，只有创建任务时参数AutoHandleUnsupportedElement=true，才返回此参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultUrl(string $ResultUrl) 设置修复后的PPT URL，只有创建任务时参数AutoHandleUnsupportedElement=true，才返回此参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSlides() 获取错误PPT页面列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSlides(array $Slides) 设置错误PPT页面列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取任务的当前状态 - QUEUED: 正在排队等待 - PROCESSING: 执行中 - FINISHED: 执行完成	
 * @method void setStatus(string $Status) 设置任务的当前状态 - QUEUED: 正在排队等待 - PROCESSING: 执行中 - FINISHED: 执行完成	
 * @method integer getProgress() 获取当前进度,取值范围为0~100
 * @method void setProgress(integer $Progress) 设置当前进度,取值范围为0~100
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePPTCheckResponse extends AbstractModel
{
    /**
     * @var string 任务的唯一标识Id
     */
    public $TaskId;

    /**
     * @var boolean PPT文件是否正常
     */
    public $IsOK;

    /**
     * @var string 修复后的PPT URL，只有创建任务时参数AutoHandleUnsupportedElement=true，才返回此参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultUrl;

    /**
     * @var array 错误PPT页面列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Slides;

    /**
     * @var string 任务的当前状态 - QUEUED: 正在排队等待 - PROCESSING: 执行中 - FINISHED: 执行完成	
     */
    public $Status;

    /**
     * @var integer 当前进度,取值范围为0~100
     */
    public $Progress;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TaskId 任务的唯一标识Id
     * @param boolean $IsOK PPT文件是否正常
     * @param string $ResultUrl 修复后的PPT URL，只有创建任务时参数AutoHandleUnsupportedElement=true，才返回此参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Slides 错误PPT页面列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 任务的当前状态 - QUEUED: 正在排队等待 - PROCESSING: 执行中 - FINISHED: 执行完成	
     * @param integer $Progress 当前进度,取值范围为0~100
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("IsOK",$param) and $param["IsOK"] !== null) {
            $this->IsOK = $param["IsOK"];
        }

        if (array_key_exists("ResultUrl",$param) and $param["ResultUrl"] !== null) {
            $this->ResultUrl = $param["ResultUrl"];
        }

        if (array_key_exists("Slides",$param) and $param["Slides"] !== null) {
            $this->Slides = [];
            foreach ($param["Slides"] as $key => $value){
                $obj = new PPTErrSlide();
                $obj->deserialize($value);
                array_push($this->Slides, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
