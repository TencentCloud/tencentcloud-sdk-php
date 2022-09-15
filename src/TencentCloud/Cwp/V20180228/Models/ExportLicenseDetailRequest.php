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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportLicenseDetail请求参数结构体
 *
 * @method array getFilters() 获取多个条件筛选时 LicenseStatus,DeadlineStatus,ResourceId,Keywords 取交集
<li> LicenseType  授权类型, 0 专业版-按量计费, 1专业版-包年包月 , 2 旗舰版-包年包月</li>
<li>ResourceId 资源ID</li>
 * @method void setFilters(array $Filters) 设置多个条件筛选时 LicenseStatus,DeadlineStatus,ResourceId,Keywords 取交集
<li> LicenseType  授权类型, 0 专业版-按量计费, 1专业版-包年包月 , 2 旗舰版-包年包月</li>
<li>ResourceId 资源ID</li>
 * @method boolean getIsHistory() 获取是否导出全部授权详情
 * @method void setIsHistory(boolean $IsHistory) 设置是否导出全部授权详情
 * @method array getTags() 获取标签筛选,平台标签能力,这里传入 标签键,标签值作为一个对象
 * @method void setTags(array $Tags) 设置标签筛选,平台标签能力,这里传入 标签键,标签值作为一个对象
 * @method string getExportMonth() 获取导出月份, 该参数仅在IsHistory 时可选.
 * @method void setExportMonth(string $ExportMonth) 设置导出月份, 该参数仅在IsHistory 时可选.
 */
class ExportLicenseDetailRequest extends AbstractModel
{
    /**
     * @var array 多个条件筛选时 LicenseStatus,DeadlineStatus,ResourceId,Keywords 取交集
<li> LicenseType  授权类型, 0 专业版-按量计费, 1专业版-包年包月 , 2 旗舰版-包年包月</li>
<li>ResourceId 资源ID</li>
     */
    public $Filters;

    /**
     * @var boolean 是否导出全部授权详情
     */
    public $IsHistory;

    /**
     * @var array 标签筛选,平台标签能力,这里传入 标签键,标签值作为一个对象
     */
    public $Tags;

    /**
     * @var string 导出月份, 该参数仅在IsHistory 时可选.
     */
    public $ExportMonth;

    /**
     * @param array $Filters 多个条件筛选时 LicenseStatus,DeadlineStatus,ResourceId,Keywords 取交集
<li> LicenseType  授权类型, 0 专业版-按量计费, 1专业版-包年包月 , 2 旗舰版-包年包月</li>
<li>ResourceId 资源ID</li>
     * @param boolean $IsHistory 是否导出全部授权详情
     * @param array $Tags 标签筛选,平台标签能力,这里传入 标签键,标签值作为一个对象
     * @param string $ExportMonth 导出月份, 该参数仅在IsHistory 时可选.
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("IsHistory",$param) and $param["IsHistory"] !== null) {
            $this->IsHistory = $param["IsHistory"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ExportMonth",$param) and $param["ExportMonth"] !== null) {
            $this->ExportMonth = $param["ExportMonth"];
        }
    }
}
