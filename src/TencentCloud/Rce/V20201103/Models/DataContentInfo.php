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
namespace TencentCloud\Rce\V20201103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 黑白名单导入名单数据的业务入参数据结构
 *
 * @method string getDataContent() 获取名单数据内容
 * @method void setDataContent(string $DataContent) 设置名单数据内容
 * @method string getDataRemark() 获取名单数据描述
 * @method void setDataRemark(string $DataRemark) 设置名单数据描述
 * @method string getStartTime() 获取名单数据开始时间
 * @method void setStartTime(string $StartTime) 设置名单数据开始时间
 * @method string getEndTime() 获取名单数据结束时间
 * @method void setEndTime(string $EndTime) 设置名单数据结束时间
 */
class DataContentInfo extends AbstractModel
{
    /**
     * @var string 名单数据内容
     */
    public $DataContent;

    /**
     * @var string 名单数据描述
     */
    public $DataRemark;

    /**
     * @var string 名单数据开始时间
     */
    public $StartTime;

    /**
     * @var string 名单数据结束时间
     */
    public $EndTime;

    /**
     * @param string $DataContent 名单数据内容
     * @param string $DataRemark 名单数据描述
     * @param string $StartTime 名单数据开始时间
     * @param string $EndTime 名单数据结束时间
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
        if (array_key_exists("DataContent",$param) and $param["DataContent"] !== null) {
            $this->DataContent = $param["DataContent"];
        }

        if (array_key_exists("DataRemark",$param) and $param["DataRemark"] !== null) {
            $this->DataRemark = $param["DataRemark"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
