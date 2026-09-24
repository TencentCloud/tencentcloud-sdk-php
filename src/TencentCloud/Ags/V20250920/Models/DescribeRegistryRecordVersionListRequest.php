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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRegistryRecordVersionList请求参数结构体
 *
 * @method string getRegistryId() 获取<p>父 Registry ID。</p>
 * @method void setRegistryId(string $RegistryId) 设置<p>父 Registry ID。</p>
 * @method string getRecordId() 获取<p>Record ID。</p>
 * @method void setRecordId(string $RecordId) 设置<p>Record ID。</p>
 * @method integer getOffset() 获取<p>分页起始偏移，默认 0。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页起始偏移，默认 0。</p>
 * @method integer getLimit() 获取<p>分页条数，默认 20，最大 100。</p>
 * @method void setLimit(integer $Limit) 设置<p>分页条数，默认 20，最大 100。</p>
 * @method array getFilters() 获取<p>过滤条件。支持：status（按 Version 状态：PREPARING/PENDING_APPROVAL/APPROVED/REJECTED/CANCELED，多值 OR）、source_type（按内容来源：MANUAL/URL_IMPORT/TAR_PACKAGE，多值 OR）。</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件。支持：status（按 Version 状态：PREPARING/PENDING_APPROVAL/APPROVED/REJECTED/CANCELED，多值 OR）、source_type（按内容来源：MANUAL/URL_IMPORT/TAR_PACKAGE，多值 OR）。</p>
 */
class DescribeRegistryRecordVersionListRequest extends AbstractModel
{
    /**
     * @var string <p>父 Registry ID。</p>
     */
    public $RegistryId;

    /**
     * @var string <p>Record ID。</p>
     */
    public $RecordId;

    /**
     * @var integer <p>分页起始偏移，默认 0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>分页条数，默认 20，最大 100。</p>
     */
    public $Limit;

    /**
     * @var array <p>过滤条件。支持：status（按 Version 状态：PREPARING/PENDING_APPROVAL/APPROVED/REJECTED/CANCELED，多值 OR）、source_type（按内容来源：MANUAL/URL_IMPORT/TAR_PACKAGE，多值 OR）。</p>
     */
    public $Filters;

    /**
     * @param string $RegistryId <p>父 Registry ID。</p>
     * @param string $RecordId <p>Record ID。</p>
     * @param integer $Offset <p>分页起始偏移，默认 0。</p>
     * @param integer $Limit <p>分页条数，默认 20，最大 100。</p>
     * @param array $Filters <p>过滤条件。支持：status（按 Version 状态：PREPARING/PENDING_APPROVAL/APPROVED/REJECTED/CANCELED，多值 OR）、source_type（按内容来源：MANUAL/URL_IMPORT/TAR_PACKAGE，多值 OR）。</p>
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new CloudFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
