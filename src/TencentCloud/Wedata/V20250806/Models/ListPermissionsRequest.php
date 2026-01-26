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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListPermissions请求参数结构体
 *
 * @method PrivilegeResource getResource() 获取资源
ResourceType：来源于TCCATALOG模块的GetGrantPrivilegesSTD接口中返回的ResourceType，并改为首字母大写，例如METALAKE对应Metalake
ResourceUri，取决于 ResourceType，Metalake时固定为default，其他类别采用catalog的三段式结构，例如
- Metalake，固定为default
- Catalog，取catalogName
- Schema，取catalogName.SchemaName
- Table,，取catalogName.SchemaName.TableName
 * @method void setResource(PrivilegeResource $Resource) 设置资源
ResourceType：来源于TCCATALOG模块的GetGrantPrivilegesSTD接口中返回的ResourceType，并改为首字母大写，例如METALAKE对应Metalake
ResourceUri，取决于 ResourceType，Metalake时固定为default，其他类别采用catalog的三段式结构，例如
- Metalake，固定为default
- Catalog，取catalogName
- Schema，取catalogName.SchemaName
- Table,，取catalogName.SchemaName.TableName
 * @method array getFilters() 获取过滤条件(此参数还未支持)
 * @method void setFilters(array $Filters) 设置过滤条件(此参数还未支持)
 * @method array getOrderFields() 获取排序字段(此参数还未支持)
 * @method void setOrderFields(array $OrderFields) 设置排序字段(此参数还未支持)
 * @method Page getPage() 获取页参数(此参数还未支持)
 * @method void setPage(Page $Page) 设置页参数(此参数还未支持)
 */
class ListPermissionsRequest extends AbstractModel
{
    /**
     * @var PrivilegeResource 资源
ResourceType：来源于TCCATALOG模块的GetGrantPrivilegesSTD接口中返回的ResourceType，并改为首字母大写，例如METALAKE对应Metalake
ResourceUri，取决于 ResourceType，Metalake时固定为default，其他类别采用catalog的三段式结构，例如
- Metalake，固定为default
- Catalog，取catalogName
- Schema，取catalogName.SchemaName
- Table,，取catalogName.SchemaName.TableName
     */
    public $Resource;

    /**
     * @var array 过滤条件(此参数还未支持)
     */
    public $Filters;

    /**
     * @var array 排序字段(此参数还未支持)
     */
    public $OrderFields;

    /**
     * @var Page 页参数(此参数还未支持)
     */
    public $Page;

    /**
     * @param PrivilegeResource $Resource 资源
ResourceType：来源于TCCATALOG模块的GetGrantPrivilegesSTD接口中返回的ResourceType，并改为首字母大写，例如METALAKE对应Metalake
ResourceUri，取决于 ResourceType，Metalake时固定为default，其他类别采用catalog的三段式结构，例如
- Metalake，固定为default
- Catalog，取catalogName
- Schema，取catalogName.SchemaName
- Table,，取catalogName.SchemaName.TableName
     * @param array $Filters 过滤条件(此参数还未支持)
     * @param array $OrderFields 排序字段(此参数还未支持)
     * @param Page $Page 页参数(此参数还未支持)
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = new PrivilegeResource();
            $this->Resource->deserialize($param["Resource"]);
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new SecurityFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("OrderFields",$param) and $param["OrderFields"] !== null) {
            $this->OrderFields = [];
            foreach ($param["OrderFields"] as $key => $value){
                $obj = new OrderField();
                $obj->deserialize($value);
                array_push($this->OrderFields, $obj);
            }
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = new Page();
            $this->Page->deserialize($param["Page"]);
        }
    }
}
