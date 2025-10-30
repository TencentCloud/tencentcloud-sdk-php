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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 路径缓存缓存配置
 *
 * @method string getSwitch() 获取路径缓存配置开关，取值有：
on：开启
off：关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitch(string $Switch) 设置路径缓存配置开关，取值有：
on：开启
off：关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCacheTime() 获取缓存过期时间设置
单位为秒，最大可设置为 365 天
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCacheTime(integer $CacheTime) 设置缓存过期时间设置
单位为秒，最大可设置为 365 天
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCompareMaxAge() 获取高级缓存过期配置，开启时会对比源站返回的 max-age 值与 CacheRules 中设置的缓存过期时间，取最小值在节点进行缓存
on：开启
off：关闭
默认为关闭状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompareMaxAge(string $CompareMaxAge) 设置高级缓存过期配置，开启时会对比源站返回的 max-age 值与 CacheRules 中设置的缓存过期时间，取最小值在节点进行缓存
on：开启
off：关闭
默认为关闭状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIgnoreCacheControl() 获取强制缓存
on：开启
off：关闭
默认为关闭状态，开启后，源站返回的 no-store、no-cache 资源，也将按照 CacheRules 规则进行缓存
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIgnoreCacheControl(string $IgnoreCacheControl) 设置强制缓存
on：开启
off：关闭
默认为关闭状态，开启后，源站返回的 no-store、no-cache 资源，也将按照 CacheRules 规则进行缓存
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIgnoreSetCookie() 获取当源站返回Set-Cookie头部时，节点是否缓存该头部及body
on：开启，不缓存该头部及body
off：关闭，遵循用户自定义的节点缓存规则
默认为关闭状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIgnoreSetCookie(string $IgnoreSetCookie) 设置当源站返回Set-Cookie头部时，节点是否缓存该头部及body
on：开启，不缓存该头部及body
off：关闭，遵循用户自定义的节点缓存规则
默认为关闭状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOriginMtimeCheckType() 获取当缓存过期后，是否开启源站 mtime 校验，配置值为equal、since、none 和 null。默认配置值为equal，会校验源站文件的mtime与长度。2024-09-12 18:00 之前创建的域名默认值 null，行为保持不变。
equal：源站响应mtime必须和缓存mtime一致，若mtime值不一致，清除缓存。
since：若源站响应mtime大于缓存mtime，清除缓存。
none： 缓存过期回源重新获取文件mtime和长度后，不会校验源站响应mtime，若源站响应携带Content-Length头部，只有文件大小改变时才会更新缓存；若源站响应不携带Content-Length头部，会更新缓存。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginMtimeCheckType(string $OriginMtimeCheckType) 设置当缓存过期后，是否开启源站 mtime 校验，配置值为equal、since、none 和 null。默认配置值为equal，会校验源站文件的mtime与长度。2024-09-12 18:00 之前创建的域名默认值 null，行为保持不变。
equal：源站响应mtime必须和缓存mtime一致，若mtime值不一致，清除缓存。
since：若源站响应mtime大于缓存mtime，清除缓存。
none： 缓存过期回源重新获取文件mtime和长度后，不会校验源站响应mtime，若源站响应携带Content-Length头部，只有文件大小改变时才会更新缓存；若源站响应不携带Content-Length头部，会更新缓存。
注意：此字段可能返回 null，表示取不到有效值。
 */
class CacheConfigCache extends AbstractModel
{
    /**
     * @var string 路径缓存配置开关，取值有：
on：开启
off：关闭
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Switch;

    /**
     * @var integer 缓存过期时间设置
单位为秒，最大可设置为 365 天
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CacheTime;

    /**
     * @var string 高级缓存过期配置，开启时会对比源站返回的 max-age 值与 CacheRules 中设置的缓存过期时间，取最小值在节点进行缓存
on：开启
off：关闭
默认为关闭状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompareMaxAge;

    /**
     * @var string 强制缓存
on：开启
off：关闭
默认为关闭状态，开启后，源站返回的 no-store、no-cache 资源，也将按照 CacheRules 规则进行缓存
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IgnoreCacheControl;

    /**
     * @var string 当源站返回Set-Cookie头部时，节点是否缓存该头部及body
on：开启，不缓存该头部及body
off：关闭，遵循用户自定义的节点缓存规则
默认为关闭状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IgnoreSetCookie;

    /**
     * @var string 当缓存过期后，是否开启源站 mtime 校验，配置值为equal、since、none 和 null。默认配置值为equal，会校验源站文件的mtime与长度。2024-09-12 18:00 之前创建的域名默认值 null，行为保持不变。
equal：源站响应mtime必须和缓存mtime一致，若mtime值不一致，清除缓存。
since：若源站响应mtime大于缓存mtime，清除缓存。
none： 缓存过期回源重新获取文件mtime和长度后，不会校验源站响应mtime，若源站响应携带Content-Length头部，只有文件大小改变时才会更新缓存；若源站响应不携带Content-Length头部，会更新缓存。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginMtimeCheckType;

    /**
     * @param string $Switch 路径缓存配置开关，取值有：
on：开启
off：关闭
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CacheTime 缓存过期时间设置
单位为秒，最大可设置为 365 天
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CompareMaxAge 高级缓存过期配置，开启时会对比源站返回的 max-age 值与 CacheRules 中设置的缓存过期时间，取最小值在节点进行缓存
on：开启
off：关闭
默认为关闭状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IgnoreCacheControl 强制缓存
on：开启
off：关闭
默认为关闭状态，开启后，源站返回的 no-store、no-cache 资源，也将按照 CacheRules 规则进行缓存
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IgnoreSetCookie 当源站返回Set-Cookie头部时，节点是否缓存该头部及body
on：开启，不缓存该头部及body
off：关闭，遵循用户自定义的节点缓存规则
默认为关闭状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OriginMtimeCheckType 当缓存过期后，是否开启源站 mtime 校验，配置值为equal、since、none 和 null。默认配置值为equal，会校验源站文件的mtime与长度。2024-09-12 18:00 之前创建的域名默认值 null，行为保持不变。
equal：源站响应mtime必须和缓存mtime一致，若mtime值不一致，清除缓存。
since：若源站响应mtime大于缓存mtime，清除缓存。
none： 缓存过期回源重新获取文件mtime和长度后，不会校验源站响应mtime，若源站响应携带Content-Length头部，只有文件大小改变时才会更新缓存；若源站响应不携带Content-Length头部，会更新缓存。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("CacheTime",$param) and $param["CacheTime"] !== null) {
            $this->CacheTime = $param["CacheTime"];
        }

        if (array_key_exists("CompareMaxAge",$param) and $param["CompareMaxAge"] !== null) {
            $this->CompareMaxAge = $param["CompareMaxAge"];
        }

        if (array_key_exists("IgnoreCacheControl",$param) and $param["IgnoreCacheControl"] !== null) {
            $this->IgnoreCacheControl = $param["IgnoreCacheControl"];
        }

        if (array_key_exists("IgnoreSetCookie",$param) and $param["IgnoreSetCookie"] !== null) {
            $this->IgnoreSetCookie = $param["IgnoreSetCookie"];
        }

        if (array_key_exists("OriginMtimeCheckType",$param) and $param["OriginMtimeCheckType"] !== null) {
            $this->OriginMtimeCheckType = $param["OriginMtimeCheckType"];
        }
    }
}
