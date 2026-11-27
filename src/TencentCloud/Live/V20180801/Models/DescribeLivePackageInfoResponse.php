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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLivePackageInfo返回参数结构体
 *
 * @method array getLivePackageInfoList() 获取<p>套餐包信息。</p>
 * @method void setLivePackageInfoList(array $LivePackageInfoList) 设置<p>套餐包信息。</p>
 * @method integer getPackageBillMode() 获取<p>套餐包当前计费方式:<br>-1: 无计费方式或获取失败<br>0: 无计费方式<br>201: 月结带宽<br>202: 月结流量<br>203: 日结带宽<br>204: 日结流量<br>205: 日结时长<br>206: 月结时长<br>304: 日结流量。</p>
 * @method void setPackageBillMode(integer $PackageBillMode) 设置<p>套餐包当前计费方式:<br>-1: 无计费方式或获取失败<br>0: 无计费方式<br>201: 月结带宽<br>202: 月结流量<br>203: 日结带宽<br>204: 日结流量<br>205: 日结时长<br>206: 月结时长<br>304: 日结流量。</p>
 * @method integer getTotalPage() 获取<p>总页数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalPage(integer $TotalPage) 设置<p>总页数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalNum() 获取<p>数据总条数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalNum(integer $TotalNum) 设置<p>数据总条数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageNum() 获取<p>当前页数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageNum(integer $PageNum) 设置<p>当前页数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageSize() 获取<p>当前每页数量。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageSize(integer $PageSize) 设置<p>当前每页数量。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFluxPackageBillMode() 获取<p>当请求参数 PackageType = 0 时生效，逗号分隔，从第一个到最后一个分别表示：<br>标准直播，中国大陆（境内全地区）计费方式。<br>标准直播，国际/港澳台（境外多地区）计费方式。<br>快直播，中国大陆（境内全地区）计费方式。<br>快直播，国际/港澳台（境外多地区）计费方式。</p>
 * @method void setFluxPackageBillMode(string $FluxPackageBillMode) 设置<p>当请求参数 PackageType = 0 时生效，逗号分隔，从第一个到最后一个分别表示：<br>标准直播，中国大陆（境内全地区）计费方式。<br>标准直播，国际/港澳台（境外多地区）计费方式。<br>快直播，中国大陆（境内全地区）计费方式。<br>快直播，国际/港澳台（境外多地区）计费方式。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLivePackageInfoResponse extends AbstractModel
{
    /**
     * @var array <p>套餐包信息。</p>
     */
    public $LivePackageInfoList;

    /**
     * @var integer <p>套餐包当前计费方式:<br>-1: 无计费方式或获取失败<br>0: 无计费方式<br>201: 月结带宽<br>202: 月结流量<br>203: 日结带宽<br>204: 日结流量<br>205: 日结时长<br>206: 月结时长<br>304: 日结流量。</p>
     */
    public $PackageBillMode;

    /**
     * @var integer <p>总页数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalPage;

    /**
     * @var integer <p>数据总条数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalNum;

    /**
     * @var integer <p>当前页数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageNum;

    /**
     * @var integer <p>当前每页数量。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageSize;

    /**
     * @var string <p>当请求参数 PackageType = 0 时生效，逗号分隔，从第一个到最后一个分别表示：<br>标准直播，中国大陆（境内全地区）计费方式。<br>标准直播，国际/港澳台（境外多地区）计费方式。<br>快直播，中国大陆（境内全地区）计费方式。<br>快直播，国际/港澳台（境外多地区）计费方式。</p>
     */
    public $FluxPackageBillMode;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $LivePackageInfoList <p>套餐包信息。</p>
     * @param integer $PackageBillMode <p>套餐包当前计费方式:<br>-1: 无计费方式或获取失败<br>0: 无计费方式<br>201: 月结带宽<br>202: 月结流量<br>203: 日结带宽<br>204: 日结流量<br>205: 日结时长<br>206: 月结时长<br>304: 日结流量。</p>
     * @param integer $TotalPage <p>总页数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalNum <p>数据总条数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageNum <p>当前页数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageSize <p>当前每页数量。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FluxPackageBillMode <p>当请求参数 PackageType = 0 时生效，逗号分隔，从第一个到最后一个分别表示：<br>标准直播，中国大陆（境内全地区）计费方式。<br>标准直播，国际/港澳台（境外多地区）计费方式。<br>快直播，中国大陆（境内全地区）计费方式。<br>快直播，国际/港澳台（境外多地区）计费方式。</p>
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
        if (array_key_exists("LivePackageInfoList",$param) and $param["LivePackageInfoList"] !== null) {
            $this->LivePackageInfoList = [];
            foreach ($param["LivePackageInfoList"] as $key => $value){
                $obj = new LivePackageInfo();
                $obj->deserialize($value);
                array_push($this->LivePackageInfoList, $obj);
            }
        }

        if (array_key_exists("PackageBillMode",$param) and $param["PackageBillMode"] !== null) {
            $this->PackageBillMode = $param["PackageBillMode"];
        }

        if (array_key_exists("TotalPage",$param) and $param["TotalPage"] !== null) {
            $this->TotalPage = $param["TotalPage"];
        }

        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("FluxPackageBillMode",$param) and $param["FluxPackageBillMode"] !== null) {
            $this->FluxPackageBillMode = $param["FluxPackageBillMode"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
