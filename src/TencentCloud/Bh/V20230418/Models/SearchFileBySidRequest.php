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
 * SearchFileBySid请求参数结构体
 *
 * @method string getSid() 获取<p>若入参为Id，则其他入参字段不作为搜索依据，仅按照Id来搜索会话</p>
 * @method void setSid(string $Sid) 设置<p>若入参为Id，则其他入参字段不作为搜索依据，仅按照Id来搜索会话</p>
 * @method boolean getAuditLog() 获取<p>是否创建审计日志,通过查看按钮调用时为true,其他为false</p>
 * @method void setAuditLog(boolean $AuditLog) 设置<p>是否创建审计日志,通过查看按钮调用时为true,其他为false</p>
 * @method integer getLimit() 获取<p>分页的页内记录数，默认为20，最大200</p>
 * @method void setLimit(integer $Limit) 设置<p>分页的页内记录数，默认为20，最大200</p>
 * @method string getFileName() 获取<p>可填写路径名或文件名</p>
 * @method void setFileName(string $FileName) 设置<p>可填写路径名或文件名</p>
 * @method integer getOffset() 获取<p>分页用偏移量</p>
 * @method void setOffset(integer $Offset) 设置<p>分页用偏移量</p>
 * @method integer getAuditAction() 获取<p>1-已放行，  2-已阻断</p>
 * @method void setAuditAction(integer $AuditAction) 设置<p>1-已放行，  2-已阻断</p>
 * @method array getAuditActionSet() 获取<p>1-已放行，  2-已阻断</p>
 * @method void setAuditActionSet(array $AuditActionSet) 设置<p>1-已放行，  2-已阻断</p>
 * @method array getTypeFilters() 获取<p>以Protocol和Method为条件查询</p>
 * @method void setTypeFilters(array $TypeFilters) 设置<p>以Protocol和Method为条件查询</p>
 */
class SearchFileBySidRequest extends AbstractModel
{
    /**
     * @var string <p>若入参为Id，则其他入参字段不作为搜索依据，仅按照Id来搜索会话</p>
     */
    public $Sid;

    /**
     * @var boolean <p>是否创建审计日志,通过查看按钮调用时为true,其他为false</p>
     */
    public $AuditLog;

    /**
     * @var integer <p>分页的页内记录数，默认为20，最大200</p>
     */
    public $Limit;

    /**
     * @var string <p>可填写路径名或文件名</p>
     */
    public $FileName;

    /**
     * @var integer <p>分页用偏移量</p>
     */
    public $Offset;

    /**
     * @var integer <p>1-已放行，  2-已阻断</p>
     */
    public $AuditAction;

    /**
     * @var array <p>1-已放行，  2-已阻断</p>
     */
    public $AuditActionSet;

    /**
     * @var array <p>以Protocol和Method为条件查询</p>
     */
    public $TypeFilters;

    /**
     * @param string $Sid <p>若入参为Id，则其他入参字段不作为搜索依据，仅按照Id来搜索会话</p>
     * @param boolean $AuditLog <p>是否创建审计日志,通过查看按钮调用时为true,其他为false</p>
     * @param integer $Limit <p>分页的页内记录数，默认为20，最大200</p>
     * @param string $FileName <p>可填写路径名或文件名</p>
     * @param integer $Offset <p>分页用偏移量</p>
     * @param integer $AuditAction <p>1-已放行，  2-已阻断</p>
     * @param array $AuditActionSet <p>1-已放行，  2-已阻断</p>
     * @param array $TypeFilters <p>以Protocol和Method为条件查询</p>
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

        if (array_key_exists("AuditLog",$param) and $param["AuditLog"] !== null) {
            $this->AuditLog = $param["AuditLog"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("AuditAction",$param) and $param["AuditAction"] !== null) {
            $this->AuditAction = $param["AuditAction"];
        }

        if (array_key_exists("AuditActionSet",$param) and $param["AuditActionSet"] !== null) {
            $this->AuditActionSet = $param["AuditActionSet"];
        }

        if (array_key_exists("TypeFilters",$param) and $param["TypeFilters"] !== null) {
            $this->TypeFilters = [];
            foreach ($param["TypeFilters"] as $key => $value){
                $obj = new SearchFileTypeFilter();
                $obj->deserialize($value);
                array_push($this->TypeFilters, $obj);
            }
        }
    }
}
