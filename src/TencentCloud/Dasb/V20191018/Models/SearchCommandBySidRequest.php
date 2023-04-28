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
 * SearchCommandBySid请求参数结构体
 *
 * @method string getSid() 获取会话Id
 * @method void setSid(string $Sid) 设置会话Id
 * @method string getCmd() 获取命令，可模糊搜索
 * @method void setCmd(string $Cmd) 设置命令，可模糊搜索
 * @method integer getEncoding() 获取Cmd字段是前端传值是否进行base64.
0:否，1：是
 * @method void setEncoding(integer $Encoding) 设置Cmd字段是前端传值是否进行base64.
0:否，1：是
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取每页容量，默认20，最大200
 * @method void setLimit(integer $Limit) 设置每页容量，默认20，最大200
 * @method array getAuditAction() 获取根据拦截状态进行过滤
 * @method void setAuditAction(array $AuditAction) 设置根据拦截状态进行过滤
 */
class SearchCommandBySidRequest extends AbstractModel
{
    /**
     * @var string 会话Id
     */
    public $Sid;

    /**
     * @var string 命令，可模糊搜索
     */
    public $Cmd;

    /**
     * @var integer Cmd字段是前端传值是否进行base64.
0:否，1：是
     */
    public $Encoding;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 每页容量，默认20，最大200
     */
    public $Limit;

    /**
     * @var array 根据拦截状态进行过滤
     */
    public $AuditAction;

    /**
     * @param string $Sid 会话Id
     * @param string $Cmd 命令，可模糊搜索
     * @param integer $Encoding Cmd字段是前端传值是否进行base64.
0:否，1：是
     * @param integer $Offset 偏移量
     * @param integer $Limit 每页容量，默认20，最大200
     * @param array $AuditAction 根据拦截状态进行过滤
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
        if (array_key_exists("Sid",$param) and $param["Sid"] !== null) {
            $this->Sid = $param["Sid"];
        }

        if (array_key_exists("Cmd",$param) and $param["Cmd"] !== null) {
            $this->Cmd = $param["Cmd"];
        }

        if (array_key_exists("Encoding",$param) and $param["Encoding"] !== null) {
            $this->Encoding = $param["Encoding"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("AuditAction",$param) and $param["AuditAction"] !== null) {
            $this->AuditAction = $param["AuditAction"];
        }
    }
}
