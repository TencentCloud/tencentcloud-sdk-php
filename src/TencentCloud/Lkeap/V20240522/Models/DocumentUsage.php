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
namespace TencentCloud\Lkeap\V20240522\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文档拆分任务的用量
 *
 * @method integer getPageNumber() 获取文档拆分任务的页数
 * @method void setPageNumber(integer $PageNumber) 设置文档拆分任务的页数
 * @method integer getTotalToken() 获取文档拆分任务消耗的总token数
 * @method void setTotalToken(integer $TotalToken) 设置文档拆分任务消耗的总token数
 * @method integer getTotalTokens() 获取文档拆分任务消耗的总token数
 * @method void setTotalTokens(integer $TotalTokens) 设置文档拆分任务消耗的总token数
 * @method integer getSplitTokens() 获取拆分消耗的token数
 * @method void setSplitTokens(integer $SplitTokens) 设置拆分消耗的token数
 * @method integer getMllmTokens() 获取mllm消耗的token数
 * @method void setMllmTokens(integer $MllmTokens) 设置mllm消耗的token数
 */
class DocumentUsage extends AbstractModel
{
    /**
     * @var integer 文档拆分任务的页数
     */
    public $PageNumber;

    /**
     * @var integer 文档拆分任务消耗的总token数
     * @deprecated
     */
    public $TotalToken;

    /**
     * @var integer 文档拆分任务消耗的总token数
     */
    public $TotalTokens;

    /**
     * @var integer 拆分消耗的token数
     */
    public $SplitTokens;

    /**
     * @var integer mllm消耗的token数
     */
    public $MllmTokens;

    /**
     * @param integer $PageNumber 文档拆分任务的页数
     * @param integer $TotalToken 文档拆分任务消耗的总token数
     * @param integer $TotalTokens 文档拆分任务消耗的总token数
     * @param integer $SplitTokens 拆分消耗的token数
     * @param integer $MllmTokens mllm消耗的token数
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("TotalToken",$param) and $param["TotalToken"] !== null) {
            $this->TotalToken = $param["TotalToken"];
        }

        if (array_key_exists("TotalTokens",$param) and $param["TotalTokens"] !== null) {
            $this->TotalTokens = $param["TotalTokens"];
        }

        if (array_key_exists("SplitTokens",$param) and $param["SplitTokens"] !== null) {
            $this->SplitTokens = $param["SplitTokens"];
        }

        if (array_key_exists("MllmTokens",$param) and $param["MllmTokens"] !== null) {
            $this->MllmTokens = $param["MllmTokens"];
        }
    }
}
