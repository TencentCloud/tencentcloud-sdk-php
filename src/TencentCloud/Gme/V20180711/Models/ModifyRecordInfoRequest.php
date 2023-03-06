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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRecordInfo请求参数结构体
 *
 * @method integer getTaskId() 获取进行中的任务taskid（StartRecord接口返回）。
 * @method void setTaskId(integer $TaskId) 设置进行中的任务taskid（StartRecord接口返回）。
 * @method integer getRecordMode() 获取录制类型：1代表单流 2代表混流 3代表单流和混流。
 * @method void setRecordMode(integer $RecordMode) 设置录制类型：1代表单流 2代表混流 3代表单流和混流。
 * @method integer getBizId() 获取应用ID。
 * @method void setBizId(integer $BizId) 设置应用ID。
 * @method SubscribeRecordUserIds getSubscribeRecordUserIds() 获取指定订阅流白名单或者黑名单。
 * @method void setSubscribeRecordUserIds(SubscribeRecordUserIds $SubscribeRecordUserIds) 设置指定订阅流白名单或者黑名单。
 */
class ModifyRecordInfoRequest extends AbstractModel
{
    /**
     * @var integer 进行中的任务taskid（StartRecord接口返回）。
     */
    public $TaskId;

    /**
     * @var integer 录制类型：1代表单流 2代表混流 3代表单流和混流。
     */
    public $RecordMode;

    /**
     * @var integer 应用ID。
     */
    public $BizId;

    /**
     * @var SubscribeRecordUserIds 指定订阅流白名单或者黑名单。
     */
    public $SubscribeRecordUserIds;

    /**
     * @param integer $TaskId 进行中的任务taskid（StartRecord接口返回）。
     * @param integer $RecordMode 录制类型：1代表单流 2代表混流 3代表单流和混流。
     * @param integer $BizId 应用ID。
     * @param SubscribeRecordUserIds $SubscribeRecordUserIds 指定订阅流白名单或者黑名单。
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
