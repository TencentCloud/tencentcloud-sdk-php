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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据资产操作标记
 *
 * @method boolean getHasPermission() 获取是否拥有权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHasPermission(boolean $HasPermission) 设置是否拥有权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHasFavorite() 获取是否已收藏
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHasFavorite(boolean $HasFavorite) 设置是否已收藏
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOtherOperate() 获取其他的操作类型:
取值：
ProjectIdNull -当前表未设置归属项目；
NotCluster - 非系统源不支持权限申请；
ProjectDisabled - 当前项目已被禁用；
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOtherOperate(string $OtherOperate) 设置其他的操作类型:
取值：
ProjectIdNull -当前表未设置归属项目；
NotCluster - 非系统源不支持权限申请；
ProjectDisabled - 当前项目已被禁用；
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFavoriteCount() 获取被收藏数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFavoriteCount(integer $FavoriteCount) 设置被收藏数
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHasBizPermission() 获取是否有修改业务权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHasBizPermission(boolean $HasBizPermission) 设置是否有修改业务权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHasProjectPermission() 获取是否有修改归属项目权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHasProjectPermission(boolean $HasProjectPermission) 设置是否有修改归属项目权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorTips() 获取用户无映射账户，请先完成账户映射后再来申请。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorTips(string $ErrorTips) 设置用户无映射账户，请先完成账户映射后再来申请。
注意：此字段可能返回 null，表示取不到有效值。
 */
class DataAssetOption extends AbstractModel
{
    /**
     * @var boolean 是否拥有权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HasPermission;

    /**
     * @var boolean 是否已收藏
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HasFavorite;

    /**
     * @var string 其他的操作类型:
取值：
ProjectIdNull -当前表未设置归属项目；
NotCluster - 非系统源不支持权限申请；
ProjectDisabled - 当前项目已被禁用；
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OtherOperate;

    /**
     * @var integer 被收藏数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FavoriteCount;

    /**
     * @var boolean 是否有修改业务权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HasBizPermission;

    /**
     * @var boolean 是否有修改归属项目权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HasProjectPermission;

    /**
     * @var string 用户无映射账户，请先完成账户映射后再来申请。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorTips;

    /**
     * @param boolean $HasPermission 是否拥有权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HasFavorite 是否已收藏
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OtherOperate 其他的操作类型:
取值：
ProjectIdNull -当前表未设置归属项目；
NotCluster - 非系统源不支持权限申请；
ProjectDisabled - 当前项目已被禁用；
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FavoriteCount 被收藏数
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HasBizPermission 是否有修改业务权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HasProjectPermission 是否有修改归属项目权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorTips 用户无映射账户，请先完成账户映射后再来申请。
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
        if (array_key_exists("HasPermission",$param) and $param["HasPermission"] !== null) {
            $this->HasPermission = $param["HasPermission"];
        }

        if (array_key_exists("HasFavorite",$param) and $param["HasFavorite"] !== null) {
            $this->HasFavorite = $param["HasFavorite"];
        }

        if (array_key_exists("OtherOperate",$param) and $param["OtherOperate"] !== null) {
            $this->OtherOperate = $param["OtherOperate"];
        }

        if (array_key_exists("FavoriteCount",$param) and $param["FavoriteCount"] !== null) {
            $this->FavoriteCount = $param["FavoriteCount"];
        }

        if (array_key_exists("HasBizPermission",$param) and $param["HasBizPermission"] !== null) {
            $this->HasBizPermission = $param["HasBizPermission"];
        }

        if (array_key_exists("HasProjectPermission",$param) and $param["HasProjectPermission"] !== null) {
            $this->HasProjectPermission = $param["HasProjectPermission"];
        }

        if (array_key_exists("ErrorTips",$param) and $param["ErrorTips"] !== null) {
            $this->ErrorTips = $param["ErrorTips"];
        }
    }
}
