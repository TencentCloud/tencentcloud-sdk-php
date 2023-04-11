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
 * SearchFileBySid请求参数结构体
 *
 * @method string getSid() 获取若入参为Id，则其他入参字段不作为搜索依据，仅按照Id来搜索会话
 * @method void setSid(string $Sid) 设置若入参为Id，则其他入参字段不作为搜索依据，仅按照Id来搜索会话
 * @method boolean getAuditLog() 获取是否创建审计日志,通过查看按钮调用时为true,其他为false
 * @method void setAuditLog(boolean $AuditLog) 设置是否创建审计日志,通过查看按钮调用时为true,其他为false
 * @method integer getLimit() 获取分页的页内记录数，默认为20，最大200
 * @method void setLimit(integer $Limit) 设置分页的页内记录数，默认为20，最大200
 * @method string getFileName() 获取可填写路径名或文件名
 * @method void setFileName(string $FileName) 设置可填写路径名或文件名
 * @method integer getOffset() 获取分页用偏移量
 * @method void setOffset(integer $Offset) 设置分页用偏移量
 * @method integer getAuditAction() 获取1-已执行，  2-被阻断
 * @method void setAuditAction(integer $AuditAction) 设置1-已执行，  2-被阻断
 * @method array getTypeFilters() 获取以Protocol和Method为条件查询
 * @method void setTypeFilters(array $TypeFilters) 设置以Protocol和Method为条件查询
 */
class SearchFileBySidRequest extends AbstractModel
{
    /**
     * @var string 若入参为Id，则其他入参字段不作为搜索依据，仅按照Id来搜索会话
     */
    public $Sid;

    /**
     * @var boolean 是否创建审计日志,通过查看按钮调用时为true,其他为false
     */
    public $AuditLog;

    /**
     * @var integer 分页的页内记录数，默认为20，最大200
     */
    public $Limit;

    /**
     * @var string 可填写路径名或文件名
     */
    public $FileName;

    /**
     * @var integer 分页用偏移量
     */
    public $Offset;

    /**
     * @var integer 1-已执行，  2-被阻断
     */
    public $AuditAction;

    /**
     * @var array 以Protocol和Method为条件查询
     */
    public $TypeFilters;

    /**
     * @param string $Sid 若入参为Id，则其他入参字段不作为搜索依据，仅按照Id来搜索会话
     * @param boolean $AuditLog 是否创建审计日志,通过查看按钮调用时为true,其他为false
     * @param integer $Limit 分页的页内记录数，默认为20，最大200
     * @param string $FileName 可填写路径名或文件名
     * @param integer $Offset 分页用偏移量
     * @param integer $AuditAction 1-已执行，  2-被阻断
     * @param array $TypeFilters 以Protocol和Method为条件查询
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
