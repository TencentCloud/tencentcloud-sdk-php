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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRecordInfo请求参数结构体
 *
 * @method integer getTaskId() 获取<p>进行中的任务taskid（StartRecord接口返回）。</p>
 * @method void setTaskId(integer $TaskId) 设置<p>进行中的任务taskid（StartRecord接口返回）。</p>
 * @method integer getRecordMode() 获取<p>录制类型：1代表单流 2代表混流 3代表单流和混流。</p>
 * @method void setRecordMode(integer $RecordMode) 设置<p>录制类型：1代表单流 2代表混流 3代表单流和混流。</p>
 * @method integer getBizId() 获取<p>应用ID。</p>
 * @method void setBizId(integer $BizId) 设置<p>应用ID。</p>
 * @method SubscribeRecordUserIds getSubscribeRecordUserIds() 获取<p>指定订阅流白名单或者黑名单。</p>
 * @method void setSubscribeRecordUserIds(SubscribeRecordUserIds $SubscribeRecordUserIds) 设置<p>指定订阅流白名单或者黑名单。</p>
 */
class ModifyRecordInfoRequest extends AbstractModel
{
    /**
     * @var integer <p>进行中的任务taskid（StartRecord接口返回）。</p>
     */
    public $TaskId;

    /**
     * @var integer <p>录制类型：1代表单流 2代表混流 3代表单流和混流。</p>
     */
    public $RecordMode;

    /**
     * @var integer <p>应用ID。</p>
     */
    public $BizId;

    /**
     * @var SubscribeRecordUserIds <p>指定订阅流白名单或者黑名单。</p>
     */
    public $SubscribeRecordUserIds;

    /**
     * @param integer $TaskId <p>进行中的任务taskid（StartRecord接口返回）。</p>
     * @param integer $RecordMode <p>录制类型：1代表单流 2代表混流 3代表单流和混流。</p>
     * @param integer $BizId <p>应用ID。</p>
     * @param SubscribeRecordUserIds $SubscribeRecordUserIds <p>指定订阅流白名单或者黑名单。</p>
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

        if (array_key_exists("RecordMode",$param) and $param["RecordMode"] !== null) {
            $this->RecordMode = $param["RecordMode"];
        }

        if (array_key_exists("BizId",$param) and $param["BizId"] !== null) {
            $this->BizId = $param["BizId"];
        }

        if (array_key_exists("SubscribeRecordUserIds",$param) and $param["SubscribeRecordUserIds"] !== null) {
            $this->SubscribeRecordUserIds = new SubscribeRecordUserIds();
            $this->SubscribeRecordUserIds->deserialize($param["SubscribeRecordUserIds"]);
        }
    }
}
