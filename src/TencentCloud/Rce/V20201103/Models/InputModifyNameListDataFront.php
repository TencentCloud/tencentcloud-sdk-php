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
 * 名单数据集合
 *
 * @method integer getNameListDataId() 获取名单数据ID
 * @method void setNameListDataId(integer $NameListDataId) 设置名单数据ID
 * @method string getDataContent() 获取名单数据内容
 * @method void setDataContent(string $DataContent) 设置名单数据内容
 * @method string getStartTime() 获取名单数据开始时间
 * @method void setStartTime(string $StartTime) 设置名单数据开始时间
 * @method string getEndTime() 获取名单数据结束时间
 * @method void setEndTime(string $EndTime) 设置名单数据结束时间
 * @method integer getStatus() 获取记录状态 [1 启用 2 停用]
 * @method void setStatus(integer $Status) 设置记录状态 [1 启用 2 停用]
 * @method string getRemark() 获取名单数据描述
 * @method void setRemark(string $Remark) 设置名单数据描述
 */
class InputModifyNameListDataFront extends AbstractModel
{
    /**
     * @var integer 名单数据ID
     */
    public $NameListDataId;

    /**
     * @var string 名单数据内容
     */
    public $DataContent;

    /**
     * @var string 名单数据开始时间
     */
    public $StartTime;

    /**
     * @var string 名单数据结束时间
     */
    public $EndTime;

    /**
     * @var integer 记录状态 [1 启用 2 停用]
     */
    public $Status;

    /**
     * @var string 名单数据描述
     */
    public $Remark;

    /**
     * @param integer $NameListDataId 名单数据ID
     * @param string $DataContent 名单数据内容
     * @param string $StartTime 名单数据开始时间
     * @param string $EndTime 名单数据结束时间
     * @param integer $Status 记录状态 [1 启用 2 停用]
     * @param string $Remark 名单数据描述
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
        if (array_key_exists("NameListDataId",$param) and $param["NameListDataId"] !== null) {
            $this->NameListDataId = $param["NameListDataId"];
        }

        if (array_key_exists("DataContent",$param) and $param["DataContent"] !== null) {
            $this->DataContent = $param["DataContent"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
