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
 * DescribeRegistryRecordVersionList返回参数结构体
 *
 * @method array getVersionSet() 获取<p>筛选和分页后的版本数组。普通模式指定 RecordId 时按 Revision 降序，普通跨 Record 查询与市场查询均按 CreateTime 降序、VersionId 升序。</p><p>市场模式只返回公开字段。支持此版本契约的后端返回 SupportedHarnessVersions 和 Metadata 数组，未设置时返回空数组。Metadata 的每项由字符串 Name 和 Value 组成。无匹配时返回空数组。</p>
 * @method void setVersionSet(array $VersionSet) 设置<p>筛选和分页后的版本数组。普通模式指定 RecordId 时按 Revision 降序，普通跨 Record 查询与市场查询均按 CreateTime 降序、VersionId 升序。</p><p>市场模式只返回公开字段。支持此版本契约的后端返回 SupportedHarnessVersions 和 Metadata 数组，未设置时返回空数组。Metadata 的每项由字符串 Name 和 Value 组成。无匹配时返回空数组。</p>
 * @method integer getTotalCount() 获取<p>符合条件的总数。</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>符合条件的总数。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRegistryRecordVersionListResponse extends AbstractModel
{
    /**
     * @var array <p>筛选和分页后的版本数组。普通模式指定 RecordId 时按 Revision 降序，普通跨 Record 查询与市场查询均按 CreateTime 降序、VersionId 升序。</p><p>市场模式只返回公开字段。支持此版本契约的后端返回 SupportedHarnessVersions 和 Metadata 数组，未设置时返回空数组。Metadata 的每项由字符串 Name 和 Value 组成。无匹配时返回空数组。</p>
     */
    public $VersionSet;

    /**
     * @var integer <p>符合条件的总数。</p>
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $VersionSet <p>筛选和分页后的版本数组。普通模式指定 RecordId 时按 Revision 降序，普通跨 Record 查询与市场查询均按 CreateTime 降序、VersionId 升序。</p><p>市场模式只返回公开字段。支持此版本契约的后端返回 SupportedHarnessVersions 和 Metadata 数组，未设置时返回空数组。Metadata 的每项由字符串 Name 和 Value 组成。无匹配时返回空数组。</p>
     * @param integer $TotalCount <p>符合条件的总数。</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("VersionSet",$param) and $param["VersionSet"] !== null) {
            $this->VersionSet = [];
            foreach ($param["VersionSet"] as $key => $value){
                $obj = new CloudRecordVersion();
                $obj->deserialize($value);
                array_push($this->VersionSet, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
