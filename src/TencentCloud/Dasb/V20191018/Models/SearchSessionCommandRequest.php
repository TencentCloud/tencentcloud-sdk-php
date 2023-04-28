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
namespace TencentCloud\Dasb\V20191018\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchSessionCommand请求参数结构体
 *
 * @method string getCmd() 获取检索的目标命令，为模糊搜索
 * @method void setCmd(string $Cmd) 设置检索的目标命令，为模糊搜索
 * @method string getStartTime() 获取开始时间，不得早于当前时间的180天前
 * @method void setStartTime(string $StartTime) 设置开始时间，不得早于当前时间的180天前
 * @method integer getOffset() 获取分页偏移位置，默认值为0
 * @method void setOffset(integer $Offset) 设置分页偏移位置，默认值为0
 * @method integer getLimit() 获取默认值为20，最大200
 * @method void setLimit(integer $Limit) 设置默认值为20，最大200
 * @method integer getEncoding() 获取Cmd字段前端是否做base64加密
0：否，1：是
 * @method void setEncoding(integer $Encoding) 设置Cmd字段前端是否做base64加密
0：否，1：是
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 */
class SearchSessionCommandRequest extends AbstractModel
{
    /**
     * @var string 检索的目标命令，为模糊搜索
     */
    public $Cmd;

    /**
     * @var string 开始时间，不得早于当前时间的180天前
     */
    public $StartTime;

    /**
     * @var integer 分页偏移位置，默认值为0
     */
    public $Offset;

    /**
     * @var integer 默认值为20，最大200
     */
    public $Limit;

    /**
     * @var integer Cmd字段前端是否做base64加密
0：否，1：是
     */
    public $Encoding;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @param string $Cmd 检索的目标命令，为模糊搜索
     * @param string $StartTime 开始时间，不得早于当前时间的180天前
     * @param integer $Offset 分页偏移位置，默认值为0
     * @param integer $Limit 默认值为20，最大200
     * @param integer $Encoding Cmd字段前端是否做base64加密
0：否，1：是
     * @param string $EndTime 结束时间
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
        if (array_key_exists("Cmd",$param) and $param["Cmd"] !== null) {
            $this->Cmd = $param["Cmd"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Encoding",$param) and $param["Encoding"] !== null) {
            $this->Encoding = $param["Encoding"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
