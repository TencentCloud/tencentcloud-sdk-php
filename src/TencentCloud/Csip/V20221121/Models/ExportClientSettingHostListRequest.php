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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportClientSettingHostList请求参数结构体
 *
 * @method string getBusiType() 获取<p>导出业务类型 PreventUninstall 防卸载主机列表导出 LoginType 扫码登录主机列表导出 ProcessDaemon 进程守护主机列表导出</p>
 * @method void setBusiType(string $BusiType) 设置<p>导出业务类型 PreventUninstall 防卸载主机列表导出 LoginType 扫码登录主机列表导出 ProcessDaemon 进程守护主机列表导出</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method array getFilters() 获取<p>过滤参数</p>
 * @method void setFilters(array $Filters) 设置<p>过滤参数</p>
 */
class ExportClientSettingHostListRequest extends AbstractModel
{
    /**
     * @var string <p>导出业务类型 PreventUninstall 防卸载主机列表导出 LoginType 扫码登录主机列表导出 ProcessDaemon 进程守护主机列表导出</p>
     */
    public $BusiType;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var array <p>过滤参数</p>
     */
    public $Filters;

    /**
     * @param string $BusiType <p>导出业务类型 PreventUninstall 防卸载主机列表导出 LoginType 扫码登录主机列表导出 ProcessDaemon 进程守护主机列表导出</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param array $Filters <p>过滤参数</p>
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
        if (array_key_exists("BusiType",$param) and $param["BusiType"] !== null) {
            $this->BusiType = $param["BusiType"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new EDRFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
