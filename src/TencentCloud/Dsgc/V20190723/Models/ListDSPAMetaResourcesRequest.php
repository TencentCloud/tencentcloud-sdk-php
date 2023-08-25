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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListDSPAMetaResources请求参数结构体
 *
 * @method string getDspaId() 获取DSPA实例ID。
 * @method void setDspaId(string $DspaId) 设置DSPA实例ID。
 * @method array getFilters() 获取过滤项。
可过滤值包括：
ResoureRegion - 资源所处地域，需要填写完整地域名称，不支持模糊匹配。

AuthStatus - authorized（已授权）、unauthorized（未授权）、deleted（资源已被删除），不支持模糊匹配，需要填写完整。

BuildType - cloud（云原生资源）、build（用户自建资源），不支持模糊匹配，需要填写完整。

MetaType - cdb（云数据Mysql）、dcdb（TDSQL MySQL版）、mariadb（云数据库 MariaDB）、postgres（云数据库 PostgreSQL）、cynosdbmysql（TDSQL-C MySQL版）、cos（对象存储）、mysql_like_proto（自建型Mysql协议类关系型数据库）、postgre_like_proto（自建型Postgre协议类关系型数据库）。

ResourceId - 资源ID，支持模糊搜索。
 * @method void setFilters(array $Filters) 设置过滤项。
可过滤值包括：
ResoureRegion - 资源所处地域，需要填写完整地域名称，不支持模糊匹配。

AuthStatus - authorized（已授权）、unauthorized（未授权）、deleted（资源已被删除），不支持模糊匹配，需要填写完整。

BuildType - cloud（云原生资源）、build（用户自建资源），不支持模糊匹配，需要填写完整。

MetaType - cdb（云数据Mysql）、dcdb（TDSQL MySQL版）、mariadb（云数据库 MariaDB）、postgres（云数据库 PostgreSQL）、cynosdbmysql（TDSQL-C MySQL版）、cos（对象存储）、mysql_like_proto（自建型Mysql协议类关系型数据库）、postgre_like_proto（自建型Postgre协议类关系型数据库）。

ResourceId - 资源ID，支持模糊搜索。
 * @method integer getLimit() 获取分页步长，默认为100。
 * @method void setLimit(integer $Limit) 设置分页步长，默认为100。
 * @method integer getOffset() 获取分页偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置分页偏移量，默认为0。
 * @method string getBindType() 获取资源绑定状态过滤，默认为全部
 * @method void setBindType(string $BindType) 设置资源绑定状态过滤，默认为全部
 */
class ListDSPAMetaResourcesRequest extends AbstractModel
{
    /**
     * @var string DSPA实例ID。
     */
    public $DspaId;

    /**
     * @var array 过滤项。
可过滤值包括：
ResoureRegion - 资源所处地域，需要填写完整地域名称，不支持模糊匹配。

AuthStatus - authorized（已授权）、unauthorized（未授权）、deleted（资源已被删除），不支持模糊匹配，需要填写完整。

BuildType - cloud（云原生资源）、build（用户自建资源），不支持模糊匹配，需要填写完整。

MetaType - cdb（云数据Mysql）、dcdb（TDSQL MySQL版）、mariadb（云数据库 MariaDB）、postgres（云数据库 PostgreSQL）、cynosdbmysql（TDSQL-C MySQL版）、cos（对象存储）、mysql_like_proto（自建型Mysql协议类关系型数据库）、postgre_like_proto（自建型Postgre协议类关系型数据库）。

ResourceId - 资源ID，支持模糊搜索。
     */
    public $Filters;

    /**
     * @var integer 分页步长，默认为100。
     */
    public $Limit;

    /**
     * @var integer 分页偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var string 资源绑定状态过滤，默认为全部
     */
    public $BindType;

    /**
     * @param string $DspaId DSPA实例ID。
     * @param array $Filters 过滤项。
可过滤值包括：
ResoureRegion - 资源所处地域，需要填写完整地域名称，不支持模糊匹配。

AuthStatus - authorized（已授权）、unauthorized（未授权）、deleted（资源已被删除），不支持模糊匹配，需要填写完整。

BuildType - cloud（云原生资源）、build（用户自建资源），不支持模糊匹配，需要填写完整。

MetaType - cdb（云数据Mysql）、dcdb（TDSQL MySQL版）、mariadb（云数据库 MariaDB）、postgres（云数据库 PostgreSQL）、cynosdbmysql（TDSQL-C MySQL版）、cos（对象存储）、mysql_like_proto（自建型Mysql协议类关系型数据库）、postgre_like_proto（自建型Postgre协议类关系型数据库）。

ResourceId - 资源ID，支持模糊搜索。
     * @param integer $Limit 分页步长，默认为100。
     * @param integer $Offset 分页偏移量，默认为0。
     * @param string $BindType 资源绑定状态过滤，默认为全部
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
        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new DspaDataSourceMngFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("BindType",$param) and $param["BindType"] !== null) {
            $this->BindType = $param["BindType"];
        }
    }
}
