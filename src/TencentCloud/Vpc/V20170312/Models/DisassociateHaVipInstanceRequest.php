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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DisassociateHaVipInstance请求参数结构体
 *
 * @method array getHaVipAssociationSet() 获取HaVip解绑的子机或网卡。最多支持10个实例。
 * @method void setHaVipAssociationSet(array $HaVipAssociationSet) 设置HaVip解绑的子机或网卡。最多支持10个实例。
 */
class DisassociateHaVipInstanceRequest extends AbstractModel
{
    /**
     * @var array HaVip解绑的子机或网卡。最多支持10个实例。
     */
    public $HaVipAssociationSet;

    /**
     * @param array $HaVipAssociationSet HaVip解绑的子机或网卡。最多支持10个实例。
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
        if (array_key_exists("HaVipAssociationSet",$param) and $param["HaVipAssociationSet"] !== null) {
            $this->HaVipAssociationSet = [];
            foreach ($param["HaVipAssociationSet"] as $key => $value){
                $obj = new HaVipAssociation();
                $obj->deserialize($value);
                array_push($this->HaVipAssociationSet, $obj);
            }
        }
    }
}
