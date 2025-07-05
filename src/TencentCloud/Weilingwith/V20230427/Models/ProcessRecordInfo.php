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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 处理记录项
 *
 * @method string getId() 获取告警的id
 * @method void setId(string $Id) 设置告警的id
 * @method integer getProcessTime() 获取处理时间，毫秒

 * @method void setProcessTime(integer $ProcessTime) 设置处理时间，毫秒

 * @method string getProcessType() 获取处理类型，此处操作类型固定填add_record

 * @method void setProcessType(string $ProcessType) 设置处理类型，此处操作类型固定填add_record

 * @method string getProcessor() 获取注:此字段填写的是孪生中台的用户，非孪生中台用户不填该字段
[{\"id\":\"123\",\"name\":\"tes\"}]

 * @method void setProcessor(string $Processor) 设置注:此字段填写的是孪生中台的用户，非孪生中台用户不填该字段
[{\"id\":\"123\",\"name\":\"tes\"}]

 * @method string getProcessDescription() 获取处理描述信息
 * @method void setProcessDescription(string $ProcessDescription) 设置处理描述信息
 * @method string getAttachedFileId() 获取附加文件标识
 * @method void setAttachedFileId(string $AttachedFileId) 设置附加文件标识
 */
class ProcessRecordInfo extends AbstractModel
{
    /**
     * @var string 告警的id
     */
    public $Id;

    /**
     * @var integer 处理时间，毫秒

     */
    public $ProcessTime;

    /**
     * @var string 处理类型，此处操作类型固定填add_record

     */
    public $ProcessType;

    /**
     * @var string 注:此字段填写的是孪生中台的用户，非孪生中台用户不填该字段
[{\"id\":\"123\",\"name\":\"tes\"}]

     */
    public $Processor;

    /**
     * @var string 处理描述信息
     */
    public $ProcessDescription;

    /**
     * @var string 附加文件标识
     */
    public $AttachedFileId;

    /**
     * @param string $Id 告警的id
     * @param integer $ProcessTime 处理时间，毫秒

     * @param string $ProcessType 处理类型，此处操作类型固定填add_record

     * @param string $Processor 注:此字段填写的是孪生中台的用户，非孪生中台用户不填该字段
[{\"id\":\"123\",\"name\":\"tes\"}]

     * @param string $ProcessDescription 处理描述信息
     * @param string $AttachedFileId 附加文件标识
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ProcessTime",$param) and $param["ProcessTime"] !== null) {
            $this->ProcessTime = $param["ProcessTime"];
        }

        if (array_key_exists("ProcessType",$param) and $param["ProcessType"] !== null) {
            $this->ProcessType = $param["ProcessType"];
        }

        if (array_key_exists("Processor",$param) and $param["Processor"] !== null) {
            $this->Processor = $param["Processor"];
        }

        if (array_key_exists("ProcessDescription",$param) and $param["ProcessDescription"] !== null) {
            $this->ProcessDescription = $param["ProcessDescription"];
        }

        if (array_key_exists("AttachedFileId",$param) and $param["AttachedFileId"] !== null) {
            $this->AttachedFileId = $param["AttachedFileId"];
        }
    }
}
