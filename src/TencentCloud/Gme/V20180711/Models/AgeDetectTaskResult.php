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
 * 年龄语音任务结果
 *
 * @method string getDataId() 获取数据唯一ID
 * @method void setDataId(string $DataId) 设置数据唯一ID
 * @method string getUrl() 获取数据文件的url
 * @method void setUrl(string $Url) 设置数据文件的url
 * @method integer getStatus() 获取任务状态，0: 已创建，1:运行中，2:正常结束，3:异常结束，4:运行超时
 * @method void setStatus(integer $Status) 设置任务状态，0: 已创建，1:运行中，2:正常结束，3:异常结束，4:运行超时
 * @method integer getAge() 获取任务结果：0: 成年，1:未成年，100:未知
 * @method void setAge(integer $Age) 设置任务结果：0: 成年，1:未成年，100:未知
 */
class AgeDetectTaskResult extends AbstractModel
{
    /**
     * @var string 数据唯一ID
     */
    public $DataId;

    /**
     * @var string 数据文件的url
     */
    public $Url;

    /**
     * @var integer 任务状态，0: 已创建，1:运行中，2:正常结束，3:异常结束，4:运行超时
     */
    public $Status;

    /**
     * @var integer 任务结果：0: 成年，1:未成年，100:未知
     */
    public $Age;

    /**
     * @param string $DataId 数据唯一ID
     * @param string $Url 数据文件的url
     * @param integer $Status 任务状态，0: 已创建，1:运行中，2:正常结束，3:异常结束，4:运行超时
     * @param integer $Age 任务结果：0: 成年，1:未成年，100:未知
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
        if (array_key_exists("DataId",$param) and $param["DataId"] !== null) {
            $this->DataId = $param["DataId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Age",$param) and $param["Age"] !== null) {
            $this->Age = $param["Age"];
        }
    }
}
