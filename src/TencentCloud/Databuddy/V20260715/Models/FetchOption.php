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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据获取选项，用于get/list请求中控制响应返回哪些额外内容
 *
 * @method boolean getFetchPermissions() 获取<p>是否在响应中返回权限列表，默认false</p>
 * @method void setFetchPermissions(boolean $FetchPermissions) 设置<p>是否在响应中返回权限列表，默认false</p>
 * @method boolean getFetchFeatureTableDetail() 获取<p>是否获取特征表详情，当AssetType为TABLE时有效</p>
 * @method void setFetchFeatureTableDetail(boolean $FetchFeatureTableDetail) 设置<p>是否获取特征表详情，当AssetType为TABLE时有效</p>
 * @method array getFilterPermissions() 获取<p>按权限过滤，传入权限列表，仅返回当前用户拥有指定权限的实体。例如传入[&quot;SELECT_TABLE&quot;]则仅返回当前用户有SELECT_TABLE权限的实体。只对list接口生效，为空时不进行权限过滤</p>
 * @method void setFilterPermissions(array $FilterPermissions) 设置<p>按权限过滤，传入权限列表，仅返回当前用户拥有指定权限的实体。例如传入[&quot;SELECT_TABLE&quot;]则仅返回当前用户有SELECT_TABLE权限的实体。只对list接口生效，为空时不进行权限过滤</p>
 * @method boolean getFetchOwners() 获取<p>是否在响应中返回负责人信息。不传或为true时返回负责人信息（默认返回），显式传false时不返回</p>
 * @method void setFetchOwners(boolean $FetchOwners) 设置<p>是否在响应中返回负责人信息。不传或为true时返回负责人信息（默认返回），显式传false时不返回</p>
 * @method boolean getFetchUserInfo() 获取<p>是否将用户Uin转换为用户名(userName)。影响范围：Audit中的CreatorName/LastModifierName、MetaOwner中的OwnerName。不传或为true时执行转换（默认转换），显式传false时不转换</p>
 * @method void setFetchUserInfo(boolean $FetchUserInfo) 设置<p>是否将用户Uin转换为用户名(userName)。影响范围：Audit中的CreatorName/LastModifierName、MetaOwner中的OwnerName。不传或为true时执行转换（默认转换），显式传false时不转换</p>
 * @method boolean getFetchMask() 获取<p>是否返回字段脱敏策略信息，默认不返回，传true则会查询表字段对应的字段脱敏策略信息</p>
 * @method void setFetchMask(boolean $FetchMask) 设置<p>是否返回字段脱敏策略信息，默认不返回，传true则会查询表字段对应的字段脱敏策略信息</p>
 * @method boolean getFetchTags() 获取<p>是否返回标签信息，默认不返回。传true时，GetTable/ListTables/GetCatalog/ListCatalogs/GetSchema/ListSchemas/GetView/ListViews/GetFunction/ListFunctions/GetVolume/ListVolumes/GetModel/ListModels等接口会在对应实体中返回标签（Tags）字段</p>
 * @method void setFetchTags(boolean $FetchTags) 设置<p>是否返回标签信息，默认不返回。传true时，GetTable/ListTables/GetCatalog/ListCatalogs/GetSchema/ListSchemas/GetView/ListViews/GetFunction/ListFunctions/GetVolume/ListVolumes/GetModel/ListModels等接口会在对应实体中返回标签（Tags）字段</p>
 * @method boolean getFetchDimensions() 获取<p>是否返回字段关联的字典维度信息，默认不传，不返回</p>
 * @method void setFetchDimensions(boolean $FetchDimensions) 设置<p>是否返回字段关联的字典维度信息，默认不传，不返回</p>
 */
class FetchOption extends AbstractModel
{
    /**
     * @var boolean <p>是否在响应中返回权限列表，默认false</p>
     */
    public $FetchPermissions;

    /**
     * @var boolean <p>是否获取特征表详情，当AssetType为TABLE时有效</p>
     */
    public $FetchFeatureTableDetail;

    /**
     * @var array <p>按权限过滤，传入权限列表，仅返回当前用户拥有指定权限的实体。例如传入[&quot;SELECT_TABLE&quot;]则仅返回当前用户有SELECT_TABLE权限的实体。只对list接口生效，为空时不进行权限过滤</p>
     */
    public $FilterPermissions;

    /**
     * @var boolean <p>是否在响应中返回负责人信息。不传或为true时返回负责人信息（默认返回），显式传false时不返回</p>
     */
    public $FetchOwners;

    /**
     * @var boolean <p>是否将用户Uin转换为用户名(userName)。影响范围：Audit中的CreatorName/LastModifierName、MetaOwner中的OwnerName。不传或为true时执行转换（默认转换），显式传false时不转换</p>
     */
    public $FetchUserInfo;

    /**
     * @var boolean <p>是否返回字段脱敏策略信息，默认不返回，传true则会查询表字段对应的字段脱敏策略信息</p>
     */
    public $FetchMask;

    /**
     * @var boolean <p>是否返回标签信息，默认不返回。传true时，GetTable/ListTables/GetCatalog/ListCatalogs/GetSchema/ListSchemas/GetView/ListViews/GetFunction/ListFunctions/GetVolume/ListVolumes/GetModel/ListModels等接口会在对应实体中返回标签（Tags）字段</p>
     */
    public $FetchTags;

    /**
     * @var boolean <p>是否返回字段关联的字典维度信息，默认不传，不返回</p>
     */
    public $FetchDimensions;

    /**
     * @param boolean $FetchPermissions <p>是否在响应中返回权限列表，默认false</p>
     * @param boolean $FetchFeatureTableDetail <p>是否获取特征表详情，当AssetType为TABLE时有效</p>
     * @param array $FilterPermissions <p>按权限过滤，传入权限列表，仅返回当前用户拥有指定权限的实体。例如传入[&quot;SELECT_TABLE&quot;]则仅返回当前用户有SELECT_TABLE权限的实体。只对list接口生效，为空时不进行权限过滤</p>
     * @param boolean $FetchOwners <p>是否在响应中返回负责人信息。不传或为true时返回负责人信息（默认返回），显式传false时不返回</p>
     * @param boolean $FetchUserInfo <p>是否将用户Uin转换为用户名(userName)。影响范围：Audit中的CreatorName/LastModifierName、MetaOwner中的OwnerName。不传或为true时执行转换（默认转换），显式传false时不转换</p>
     * @param boolean $FetchMask <p>是否返回字段脱敏策略信息，默认不返回，传true则会查询表字段对应的字段脱敏策略信息</p>
     * @param boolean $FetchTags <p>是否返回标签信息，默认不返回。传true时，GetTable/ListTables/GetCatalog/ListCatalogs/GetSchema/ListSchemas/GetView/ListViews/GetFunction/ListFunctions/GetVolume/ListVolumes/GetModel/ListModels等接口会在对应实体中返回标签（Tags）字段</p>
     * @param boolean $FetchDimensions <p>是否返回字段关联的字典维度信息，默认不传，不返回</p>
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
        if (array_key_exists("FetchPermissions",$param) and $param["FetchPermissions"] !== null) {
            $this->FetchPermissions = $param["FetchPermissions"];
        }

        if (array_key_exists("FetchFeatureTableDetail",$param) and $param["FetchFeatureTableDetail"] !== null) {
            $this->FetchFeatureTableDetail = $param["FetchFeatureTableDetail"];
        }

        if (array_key_exists("FilterPermissions",$param) and $param["FilterPermissions"] !== null) {
            $this->FilterPermissions = $param["FilterPermissions"];
        }

        if (array_key_exists("FetchOwners",$param) and $param["FetchOwners"] !== null) {
            $this->FetchOwners = $param["FetchOwners"];
        }

        if (array_key_exists("FetchUserInfo",$param) and $param["FetchUserInfo"] !== null) {
            $this->FetchUserInfo = $param["FetchUserInfo"];
        }

        if (array_key_exists("FetchMask",$param) and $param["FetchMask"] !== null) {
            $this->FetchMask = $param["FetchMask"];
        }

        if (array_key_exists("FetchTags",$param) and $param["FetchTags"] !== null) {
            $this->FetchTags = $param["FetchTags"];
        }

        if (array_key_exists("FetchDimensions",$param) and $param["FetchDimensions"] !== null) {
            $this->FetchDimensions = $param["FetchDimensions"];
        }
    }
}
