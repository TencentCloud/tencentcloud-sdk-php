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
 * 推荐的索引
 *
 * @method integer getId() 获取索引id，唯一标识一个索引。
 * @method void setId(integer $Id) 设置索引id，唯一标识一个索引。
 * @method string getIndexCommand() 获取创建索引命令。
 * @method void setIndexCommand(string $IndexCommand) 设置创建索引命令。
 * @method string getIndexStr() 获取索引字符串。
 * @method void setIndexStr(string $IndexStr) 设置索引字符串。
 * @method integer getLevel() 获取优化级别，1-4，优先级从高到低。
 * @method void setLevel(integer $Level) 设置优化级别，1-4，优先级从高到低。
 * @method integer getScore() 获取索引得分。
 * @method void setScore(integer $Score) 设置索引得分。
 * @method array getSigns() 获取签名。
 * @method void setSigns(array $Signs) 设置签名。
 * @method integer getStatus() 获取0-待创建；1-创建中。
 * @method void setStatus(integer $Status) 设置0-待创建；1-创建中。
 */
class IndexesToBuild extends AbstractModel
{
    /**
     * @var integer 索引id，唯一标识一个索引。
     */
    public $Id;

    /**
     * @var string 创建索引命令。
     */
    public $IndexCommand;

    /**
     * @var string 索引字符串。
     */
    public $IndexStr;

    /**
     * @var integer 优化级别，1-4，优先级从高到低。
     */
    public $Level;

    /**
     * @var integer 索引得分。
     */
    public $Score;

    /**
     * @var array 签名。
     */
    public $Signs;

    /**
     * @var integer 0-待创建；1-创建中。
     */
    public $Status;

    /**
     * @param integer $Id 索引id，唯一标识一个索引。
     * @param string $IndexCommand 创建索引命令。
     * @param string $IndexStr 索引字符串。
     * @param integer $Level 优化级别，1-4，优先级从高到低。
     * @param integer $Score 索引得分。
     * @param array $Signs 签名。
     * @param integer $Status 0-待创建；1-创建中。
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

        if (array_key_exists("IndexCommand",$param) and $param["IndexCommand"] !== null) {
            $this->IndexCommand = $param["IndexCommand"];
        }

        if (array_key_exists("IndexStr",$param) and $param["IndexStr"] !== null) {
            $this->IndexStr = $param["IndexStr"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Signs",$param) and $param["Signs"] !== null) {
            $this->Signs = $param["Signs"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
