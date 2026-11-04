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
 * @method string getRegistryId() 获取<p>父 Registry ID，与 RecordId 同时省略或为空字符串时使用市场查询；两者均非空时使用普通查询。</p><p>市场查询仅返回服务端 marketplace.registry_ids 配置来源的未删除资产的 APPROVED 版本；文件还需 READY 且制品可用。普通查询保持 AppID 隔离和原 CAM 权限，即使显式指定官方 Registry 也按普通权限处理。仅一个 ID 非空返回 InvalidParameter。</p>
 * @method void setRegistryId(string $RegistryId) 设置<p>父 Registry ID，与 RecordId 同时省略或为空字符串时使用市场查询；两者均非空时使用普通查询。</p><p>市场查询仅返回服务端 marketplace.registry_ids 配置来源的未删除资产的 APPROVED 版本；文件还需 READY 且制品可用。普通查询保持 AppID 隔离和原 CAM 权限，即使显式指定官方 Registry 也按普通权限处理。仅一个 ID 非空返回 InvalidParameter。</p>
 * @method string getRecordId() 获取<p>Record ID。市场和普通 Registry 查询均可省略，提供时仅查询该 Record 的版本。</p><p>省略时查询 RegistryId 所选范围内的可读版本。查询各 Record 的稳定版本时显式传 Filters 的 label=stable。</p>
 * @method void setRecordId(string $RecordId) 设置<p>Record ID。市场和普通 Registry 查询均可省略，提供时仅查询该 Record 的版本。</p><p>省略时查询 RegistryId 所选范围内的可读版本。查询各 Record 的稳定版本时显式传 Filters 的 label=stable。</p>
 * @method integer getOffset() 获取<p>分页起始偏移，默认 0。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页起始偏移，默认 0。</p>
 * @method integer getLimit() 获取<p>分页条数，默认 20，最大 100。</p>
 * @method void setLimit(integer $Limit) 设置<p>分页条数，默认 20，最大 100。</p>
 * @method array getFilters() 获取<p>过滤条件。两种模式默认支持 label、search、descriptor_type、supported_harness_engine、supported_harness_version、metadata. 前缀、status、source_type；record_id 和 version_id 仅支持市场模式。</p><p>同 key 多值 OR，不同 key AND。supported_harness_engine 与 supported_harness_version 必须同时提供，分别对 HarnessEngine 和 HarnessEngineVersion 区分大小写精确匹配，并命中 SupportedHarnessVersions 中同一个对象；禁止跨元素组合，未声明兼容性时不匹配，只提供其中一个返回 InvalidParameter.Filters。search 仅允许单个关键词，匹配 Record 名称或描述；label 匹配当前绑定版本。metadata. 后完整小写文本作为顶层 key，按字符串值精确匹配，不解析嵌套路径。status 支持 PREPARING/PENDING_APPROVAL/APPROVED/REJECTED/CANCELED；source_type 支持 MANUAL/URL_IMPORT/TAR_PACKAGE/FILE。未知或重复 key、空 Values、非法值拒绝。无 Filters 不默认 stable，市场默认浏览显式传 label=stable；筛选不能扩大可读范围。</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件。两种模式默认支持 label、search、descriptor_type、supported_harness_engine、supported_harness_version、metadata. 前缀、status、source_type；record_id 和 version_id 仅支持市场模式。</p><p>同 key 多值 OR，不同 key AND。supported_harness_engine 与 supported_harness_version 必须同时提供，分别对 HarnessEngine 和 HarnessEngineVersion 区分大小写精确匹配，并命中 SupportedHarnessVersions 中同一个对象；禁止跨元素组合，未声明兼容性时不匹配，只提供其中一个返回 InvalidParameter.Filters。search 仅允许单个关键词，匹配 Record 名称或描述；label 匹配当前绑定版本。metadata. 后完整小写文本作为顶层 key，按字符串值精确匹配，不解析嵌套路径。status 支持 PREPARING/PENDING_APPROVAL/APPROVED/REJECTED/CANCELED；source_type 支持 MANUAL/URL_IMPORT/TAR_PACKAGE/FILE。未知或重复 key、空 Values、非法值拒绝。无 Filters 不默认 stable，市场默认浏览显式传 label=stable；筛选不能扩大可读范围。</p>
 */
class DescribeRegistryRecordVersionListRequest extends AbstractModel
{
    /**
     * @var string <p>父 Registry ID，与 RecordId 同时省略或为空字符串时使用市场查询；两者均非空时使用普通查询。</p><p>市场查询仅返回服务端 marketplace.registry_ids 配置来源的未删除资产的 APPROVED 版本；文件还需 READY 且制品可用。普通查询保持 AppID 隔离和原 CAM 权限，即使显式指定官方 Registry 也按普通权限处理。仅一个 ID 非空返回 InvalidParameter。</p>
     */
    public $RegistryId;

    /**
     * @var string <p>Record ID。市场和普通 Registry 查询均可省略，提供时仅查询该 Record 的版本。</p><p>省略时查询 RegistryId 所选范围内的可读版本。查询各 Record 的稳定版本时显式传 Filters 的 label=stable。</p>
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
     * @var array <p>过滤条件。两种模式默认支持 label、search、descriptor_type、supported_harness_engine、supported_harness_version、metadata. 前缀、status、source_type；record_id 和 version_id 仅支持市场模式。</p><p>同 key 多值 OR，不同 key AND。supported_harness_engine 与 supported_harness_version 必须同时提供，分别对 HarnessEngine 和 HarnessEngineVersion 区分大小写精确匹配，并命中 SupportedHarnessVersions 中同一个对象；禁止跨元素组合，未声明兼容性时不匹配，只提供其中一个返回 InvalidParameter.Filters。search 仅允许单个关键词，匹配 Record 名称或描述；label 匹配当前绑定版本。metadata. 后完整小写文本作为顶层 key，按字符串值精确匹配，不解析嵌套路径。status 支持 PREPARING/PENDING_APPROVAL/APPROVED/REJECTED/CANCELED；source_type 支持 MANUAL/URL_IMPORT/TAR_PACKAGE/FILE。未知或重复 key、空 Values、非法值拒绝。无 Filters 不默认 stable，市场默认浏览显式传 label=stable；筛选不能扩大可读范围。</p>
     */
    public $Filters;

    /**
     * @param string $RegistryId <p>父 Registry ID，与 RecordId 同时省略或为空字符串时使用市场查询；两者均非空时使用普通查询。</p><p>市场查询仅返回服务端 marketplace.registry_ids 配置来源的未删除资产的 APPROVED 版本；文件还需 READY 且制品可用。普通查询保持 AppID 隔离和原 CAM 权限，即使显式指定官方 Registry 也按普通权限处理。仅一个 ID 非空返回 InvalidParameter。</p>
     * @param string $RecordId <p>Record ID。市场和普通 Registry 查询均可省略，提供时仅查询该 Record 的版本。</p><p>省略时查询 RegistryId 所选范围内的可读版本。查询各 Record 的稳定版本时显式传 Filters 的 label=stable。</p>
     * @param integer $Offset <p>分页起始偏移，默认 0。</p>
     * @param integer $Limit <p>分页条数，默认 20，最大 100。</p>
     * @param array $Filters <p>过滤条件。两种模式默认支持 label、search、descriptor_type、supported_harness_engine、supported_harness_version、metadata. 前缀、status、source_type；record_id 和 version_id 仅支持市场模式。</p><p>同 key 多值 OR，不同 key AND。supported_harness_engine 与 supported_harness_version 必须同时提供，分别对 HarnessEngine 和 HarnessEngineVersion 区分大小写精确匹配，并命中 SupportedHarnessVersions 中同一个对象；禁止跨元素组合，未声明兼容性时不匹配，只提供其中一个返回 InvalidParameter.Filters。search 仅允许单个关键词，匹配 Record 名称或描述；label 匹配当前绑定版本。metadata. 后完整小写文本作为顶层 key，按字符串值精确匹配，不解析嵌套路径。status 支持 PREPARING/PENDING_APPROVAL/APPROVED/REJECTED/CANCELED；source_type 支持 MANUAL/URL_IMPORT/TAR_PACKAGE/FILE。未知或重复 key、空 Values、非法值拒绝。无 Filters 不默认 stable，市场默认浏览显式传 label=stable；筛选不能扩大可读范围。</p>
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
