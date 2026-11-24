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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchCommandBySid请求参数结构体
 *
 * @method string getSid() 获取<p>会话Id</p>
 * @method void setSid(string $Sid) 设置<p>会话Id</p>
 * @method string getCmd() 获取<p>命令，可模糊搜索</p>
 * @method void setCmd(string $Cmd) 设置<p>命令，可模糊搜索</p>
 * @method integer getEncoding() 获取<p>Cmd字段是前端传值是否进行base64.<br>0:否，1：是</p>
 * @method void setEncoding(integer $Encoding) 设置<p>Cmd字段是前端传值是否进行base64.<br>0:否，1：是</p>
 * @method integer getOffset() 获取<p>偏移量</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量</p>
 * @method integer getLimit() 获取<p>每页容量，默认20，最大200</p>
 * @method void setLimit(integer $Limit) 设置<p>每页容量，默认20，最大200</p>
 * @method array getAuditAction() 获取<p>根据拦截状态进行过滤，1-已放行，2-已阻断，3-复核</p>
 * @method void setAuditAction(array $AuditAction) 设置<p>根据拦截状态进行过滤，1-已放行，2-已阻断，3-复核</p>
 */
class SearchCommandBySidRequest extends AbstractModel
{
    /**
     * @var string <p>会话Id</p>
     */
    public $Sid;

    /**
     * @var string <p>命令，可模糊搜索</p>
     */
    public $Cmd;

    /**
     * @var integer <p>Cmd字段是前端传值是否进行base64.<br>0:否，1：是</p>
     */
    public $Encoding;

    /**
     * @var integer <p>偏移量</p>
     */
    public $Offset;

    /**
     * @var integer <p>每页容量，默认20，最大200</p>
     */
    public $Limit;

    /**
     * @var array <p>根据拦截状态进行过滤，1-已放行，2-已阻断，3-复核</p>
     */
    public $AuditAction;

    /**
     * @param string $Sid <p>会话Id</p>
     * @param string $Cmd <p>命令，可模糊搜索</p>
     * @param integer $Encoding <p>Cmd字段是前端传值是否进行base64.<br>0:否，1：是</p>
     * @param integer $Offset <p>偏移量</p>
     * @param integer $Limit <p>每页容量，默认20，最大200</p>
     * @param array $AuditAction <p>根据拦截状态进行过滤，1-已放行，2-已阻断，3-复核</p>
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
