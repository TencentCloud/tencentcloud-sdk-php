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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 无效索引
 *
 * @method string getIndexStr() 获取索引字符串。
 * @method void setIndexStr(string $IndexStr) 设置索引字符串。
 * @method integer getScore() 获取索引得分。
 * @method void setScore(integer $Score) 设置索引得分。
 * @method string getReason() 获取无效原因。
 * @method void setReason(string $Reason) 设置无效原因。
 * @method string getIndexCommand() 获取删除索引命令。
 * @method void setIndexCommand(string $IndexCommand) 设置删除索引命令。
 * @method string getIndexName() 获取索引名。
 * @method void setIndexName(string $IndexName) 设置索引名。
 */
class IndexesToDrop extends AbstractModel
{
    /**
     * @var string 索引字符串。
     */
    public $IndexStr;

    /**
     * @var integer 索引得分。
     */
    public $Score;

    /**
     * @var string 无效原因。
     */
    public $Reason;

    /**
     * @var string 删除索引命令。
     */
    public $IndexCommand;

    /**
     * @var string 索引名。
     */
    public $IndexName;

    /**
     * @param string $IndexStr 索引字符串。
     * @param integer $Score 索引得分。
     * @param string $Reason 无效原因。
     * @param string $IndexCommand 删除索引命令。
     * @param string $IndexName 索引名。
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
        if (array_key_exists("IndexStr",$param) and $param["IndexStr"] !== null) {
            $this->IndexStr = $param["IndexStr"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("IndexCommand",$param) and $param["IndexCommand"] !== null) {
            $this->IndexCommand = $param["IndexCommand"];
        }

        if (array_key_exists("IndexName",$param) and $param["IndexName"] !== null) {
            $this->IndexName = $param["IndexName"];
        }
    }
}
