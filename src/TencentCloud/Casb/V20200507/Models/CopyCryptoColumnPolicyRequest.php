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
namespace TencentCloud\Casb\V20200507\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CopyCryptoColumnPolicy请求参数结构体
 *
 * @method string getCasbId() 获取实例Id
 * @method void setCasbId(string $CasbId) 设置实例Id
 * @method string getMetaDataId() 获取元数据id
 * @method void setMetaDataId(string $MetaDataId) 设置元数据id
 * @method string getDstCasbId() 获取目标实例Id 如果和实例Id相同则为同CasbId下的策略复制
 * @method void setDstCasbId(string $DstCasbId) 设置目标实例Id 如果和实例Id相同则为同CasbId下的策略复制
 * @method string getDstMetaDataId() 获取目标实例Id 如果和[元数据id]相同则为同元数据下的策略复制
 * @method void setDstMetaDataId(string $DstMetaDataId) 设置目标实例Id 如果和[元数据id]相同则为同元数据下的策略复制
 * @method array getSrcTableFilter() 获取筛选来源数据库的表
 * @method void setSrcTableFilter(array $SrcTableFilter) 设置筛选来源数据库的表
 * @method string getDstDatabaseName() 获取复制同元数据下的策略，需要填写目标数据库名
 * @method void setDstDatabaseName(string $DstDatabaseName) 设置复制同元数据下的策略，需要填写目标数据库名
 */
class CopyCryptoColumnPolicyRequest extends AbstractModel
{
    /**
     * @var string 实例Id
     */
    public $CasbId;

    /**
     * @var string 元数据id
     */
    public $MetaDataId;

    /**
     * @var string 目标实例Id 如果和实例Id相同则为同CasbId下的策略复制
     */
    public $DstCasbId;

    /**
     * @var string 目标实例Id 如果和[元数据id]相同则为同元数据下的策略复制
     */
    public $DstMetaDataId;

    /**
     * @var array 筛选来源数据库的表
     */
    public $SrcTableFilter;

    /**
     * @var string 复制同元数据下的策略，需要填写目标数据库名
     */
    public $DstDatabaseName;

    /**
     * @param string $CasbId 实例Id
     * @param string $MetaDataId 元数据id
     * @param string $DstCasbId 目标实例Id 如果和实例Id相同则为同CasbId下的策略复制
     * @param string $DstMetaDataId 目标实例Id 如果和[元数据id]相同则为同元数据下的策略复制
     * @param array $SrcTableFilter 筛选来源数据库的表
     * @param string $DstDatabaseName 复制同元数据下的策略，需要填写目标数据库名
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
        if (array_key_exists("CasbId",$param) and $param["CasbId"] !== null) {
            $this->CasbId = $param["CasbId"];
        }

        if (array_key_exists("MetaDataId",$param) and $param["MetaDataId"] !== null) {
            $this->MetaDataId = $param["MetaDataId"];
        }

        if (array_key_exists("DstCasbId",$param) and $param["DstCasbId"] !== null) {
            $this->DstCasbId = $param["DstCasbId"];
        }

        if (array_key_exists("DstMetaDataId",$param) and $param["DstMetaDataId"] !== null) {
            $this->DstMetaDataId = $param["DstMetaDataId"];
        }

        if (array_key_exists("SrcTableFilter",$param) and $param["SrcTableFilter"] !== null) {
            $this->SrcTableFilter = [];
            foreach ($param["SrcTableFilter"] as $key => $value){
                $obj = new CryptoCopyColumnPolicyTableFilter();
                $obj->deserialize($value);
                array_push($this->SrcTableFilter, $obj);
            }
        }

        if (array_key_exists("DstDatabaseName",$param) and $param["DstDatabaseName"] !== null) {
            $this->DstDatabaseName = $param["DstDatabaseName"];
        }
    }
}
