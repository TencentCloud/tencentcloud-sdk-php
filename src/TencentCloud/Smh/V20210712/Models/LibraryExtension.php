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
namespace TencentCloud\Smh\V20210712\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 媒体库配置项
 *
 * @method boolean getIsFileLibrary() 获取<p>true 为文件类型媒体库，可存储任何类型文件；false 为媒体类型媒体库，仅可存储照片和视频类型文件。默认为 false。在媒体库创建后不能修改。</p>
 * @method void setIsFileLibrary(boolean $IsFileLibrary) 设置<p>true 为文件类型媒体库，可存储任何类型文件；false 为媒体类型媒体库，仅可存储照片和视频类型文件。默认为 false。在媒体库创建后不能修改。</p>
 * @method boolean getIsMultiSpace() 获取<p>true 为多租户空间媒体库，可创建多个租户空间；false 为单租户空间媒体库，不能创建租户空间，仅可使用默认的单一租户空间。默认为 false。在媒体库创建后不能修改。</p>
 * @method void setIsMultiSpace(boolean $IsMultiSpace) 设置<p>true 为多租户空间媒体库，可创建多个租户空间；false 为单租户空间媒体库，不能创建租户空间，仅可使用默认的单一租户空间。默认为 false。在媒体库创建后不能修改。</p>
 * @method string getCosStorageClass() 获取<p>保存至 COS 对象存储的文件的存储类型，仅支持 STANDARD、STANDARD_IA、INTELLIGENT_TIERING、MAZ_STANDARD、MAZ_STANDARD_IA 和 MAZ_INTELLIGENT_TIERING，默认为 STANDARD，当使用多 AZ 存储桶时将自动使用 MAZ_ 开头的用于多 AZ 的存储类型，否则自动使用非 MAZ_ 开头的用于非多 AZ 的存储类型。当指定智能分层存储 INTELLIGENT_TIERING 或 MAZ_INTELLIGENT_TIERING 时，需要事先为存储桶开启智能分层存储，否则将返回失败。在媒体库创建后不能修改。</p>
 * @method void setCosStorageClass(string $CosStorageClass) 设置<p>保存至 COS 对象存储的文件的存储类型，仅支持 STANDARD、STANDARD_IA、INTELLIGENT_TIERING、MAZ_STANDARD、MAZ_STANDARD_IA 和 MAZ_INTELLIGENT_TIERING，默认为 STANDARD，当使用多 AZ 存储桶时将自动使用 MAZ_ 开头的用于多 AZ 的存储类型，否则自动使用非 MAZ_ 开头的用于非多 AZ 的存储类型。当指定智能分层存储 INTELLIGENT_TIERING 或 MAZ_INTELLIGENT_TIERING 时，需要事先为存储桶开启智能分层存储，否则将返回失败。在媒体库创建后不能修改。</p>
 * @method boolean getUseRecycleBin() 获取<p>是否开启回收站功能。默认为 false。</p>
 * @method void setUseRecycleBin(boolean $UseRecycleBin) 设置<p>是否开启回收站功能。默认为 false。</p>
 * @method integer getAutoRemoveRecycledDays() 获取<p>当开启回收站时，自动删除回收站项目的天数，不能超过 1095（3 年），指定为 0 则不自动删除，默认为 0。当未开启回收站时，该属性为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoRemoveRecycledDays(integer $AutoRemoveRecycledDays) 设置<p>当开启回收站时，自动删除回收站项目的天数，不能超过 1095（3 年），指定为 0 则不自动删除，默认为 0。当未开启回收站时，该属性为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableSearch() 获取<p>是否启用文件路径搜索功能。默认为 false。</p>
 * @method void setEnableSearch(boolean $EnableSearch) 设置<p>是否启用文件路径搜索功能。默认为 false。</p>
 * @method boolean getDenyOnQuotaLessThanUsage() 获取<p>设置媒体库或租户空间配额且配额小于已使用存储量时，是否拒绝设置请求。默认为 false。</p>
 * @method void setDenyOnQuotaLessThanUsage(boolean $DenyOnQuotaLessThanUsage) 设置<p>设置媒体库或租户空间配额且配额小于已使用存储量时，是否拒绝设置请求。默认为 false。</p>
 * @method boolean getEnableFileHistory() 获取<p>是否开启历史版本。默认为 false。</p>
 * @method void setEnableFileHistory(boolean $EnableFileHistory) 设置<p>是否开启历史版本。默认为 false。</p>
 * @method integer getFileHistoryCount() 获取<p>当开启历史版本时，指定单个文件保留的历史版本的数量上限，取值范围为 1 到 999。当未开启历史版本时，该属性可能为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileHistoryCount(integer $FileHistoryCount) 设置<p>当开启历史版本时，指定单个文件保留的历史版本的数量上限，取值范围为 1 到 999。当未开启历史版本时，该属性可能为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFileHistoryExpireDay() 获取<p>当开启历史版本时，指定历史版本保留的最长天数，取值范围为 0 到 999，当指定为 0 时代表永久保留。当未开启历史版本时，该属性可能为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileHistoryExpireDay(integer $FileHistoryExpireDay) 设置<p>当开启历史版本时，指定历史版本保留的最长天数，取值范围为 0 到 999，当指定为 0 时代表永久保留。当未开启历史版本时，该属性可能为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxDirFileNameLength() 获取<p>目录或文件名的最长长度，不能超过 255，默认为 255。修改该参数不会影响存量目录或文件名，即如果将该字段的值改小，已经存在的长度超过目标值的目录或文件名不会发生变化。</p>
 * @method void setMaxDirFileNameLength(integer $MaxDirFileNameLength) 设置<p>目录或文件名的最长长度，不能超过 255，默认为 255。修改该参数不会影响存量目录或文件名，即如果将该字段的值改小，已经存在的长度超过目标值的目录或文件名不会发生变化。</p>
 * @method boolean getIsPublicRead() 获取<p>是否开启公有读，开启后读操作无需使用访问令牌，默认为 false。仅单租户空间媒体库支持该属性，否则该属性为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsPublicRead(boolean $IsPublicRead) 设置<p>是否开启公有读，开启后读操作无需使用访问令牌，默认为 false。仅单租户空间媒体库支持该属性，否则该属性为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsMultiAlbum() 获取<p>媒体类型媒体库是否开启多相簿，开启后可创建一级目录（即相簿）且媒体文件只能保存在各相簿中，否则不能创建相簿且媒体文件只能保存在根目录。默认为 false。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。在媒体库创建后不能修改。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsMultiAlbum(boolean $IsMultiAlbum) 设置<p>媒体类型媒体库是否开启多相簿，开启后可创建一级目录（即相簿）且媒体文件只能保存在各相簿中，否则不能创建相簿且媒体文件只能保存在根目录。默认为 false。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。在媒体库创建后不能修改。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAllowPhoto() 获取<p>媒体类型媒体库是否允许上传照片，默认为 true。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllowPhoto(boolean $AllowPhoto) 设置<p>媒体类型媒体库是否允许上传照片，默认为 true。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAllowPhotoExtName() 获取<p>当媒体类型媒体库允许上传照片时，指定允许的扩展名，默认为空数组，此时将根据文件扩展名对应的 MIME 类型自动判断。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllowPhotoExtName(array $AllowPhotoExtName) 设置<p>当媒体类型媒体库允许上传照片时，指定允许的扩展名，默认为空数组，此时将根据文件扩展名对应的 MIME 类型自动判断。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAllowVideo() 获取<p>媒体类型媒体库是否允许上传视频，默认为 true。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllowVideo(boolean $AllowVideo) 设置<p>媒体类型媒体库是否允许上传视频，默认为 true。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAllowVideoExtName() 获取<p>当媒体类型媒体库允许上传视频时，指定允许的扩展名，默认为空数组，此时将根据文件扩展名对应的 MIME 类型自动判断。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllowVideoExtName(array $AllowVideoExtName) 设置<p>当媒体类型媒体库允许上传视频时，指定允许的扩展名，默认为空数组，此时将根据文件扩展名对应的 MIME 类型自动判断。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAllowFileExtName() 获取<p>指定文件类型媒体库允许的文件扩展名，默认为空数组，此时允许上传所有类型文件。仅单租户空间文件类型媒体库支持该属性，否则该属性为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllowFileExtName(array $AllowFileExtName) 设置<p>指定文件类型媒体库允许的文件扩展名，默认为空数组，此时允许上传所有类型文件。仅单租户空间文件类型媒体库支持该属性，否则该属性为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getRecognizeSensitiveContent() 获取<p>照片上传时是否进行敏感内容鉴定，默认为 false。仅单租户空间媒体库支持该属性，否则该属性为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecognizeSensitiveContent(boolean $RecognizeSensitiveContent) 设置<p>照片上传时是否进行敏感内容鉴定，默认为 false。仅单租户空间媒体库支持该属性，否则该属性为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableQuota() 获取<p>是否开启媒体库配额</p><p>默认值：false</p><p>创建媒体库指定，创建后不允许修改</p>
 * @method void setEnableQuota(boolean $EnableQuota) 设置<p>是否开启媒体库配额</p><p>默认值：false</p><p>创建媒体库指定，创建后不允许修改</p>
 * @method integer getLibraryQuota() 获取<p>媒体库配额，单位：字节</p><p>取值范围：[1, 9223372036854775807]</p><p>创建媒体库时，开启媒体库配额情况下，此参数必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLibraryQuota(integer $LibraryQuota) 设置<p>媒体库配额，单位：字节</p><p>取值范围：[1, 9223372036854775807]</p><p>创建媒体库时，开启媒体库配额情况下，此参数必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class LibraryExtension extends AbstractModel
{
    /**
     * @var boolean <p>true 为文件类型媒体库，可存储任何类型文件；false 为媒体类型媒体库，仅可存储照片和视频类型文件。默认为 false。在媒体库创建后不能修改。</p>
     */
    public $IsFileLibrary;

    /**
     * @var boolean <p>true 为多租户空间媒体库，可创建多个租户空间；false 为单租户空间媒体库，不能创建租户空间，仅可使用默认的单一租户空间。默认为 false。在媒体库创建后不能修改。</p>
     */
    public $IsMultiSpace;

    /**
     * @var string <p>保存至 COS 对象存储的文件的存储类型，仅支持 STANDARD、STANDARD_IA、INTELLIGENT_TIERING、MAZ_STANDARD、MAZ_STANDARD_IA 和 MAZ_INTELLIGENT_TIERING，默认为 STANDARD，当使用多 AZ 存储桶时将自动使用 MAZ_ 开头的用于多 AZ 的存储类型，否则自动使用非 MAZ_ 开头的用于非多 AZ 的存储类型。当指定智能分层存储 INTELLIGENT_TIERING 或 MAZ_INTELLIGENT_TIERING 时，需要事先为存储桶开启智能分层存储，否则将返回失败。在媒体库创建后不能修改。</p>
     */
    public $CosStorageClass;

    /**
     * @var boolean <p>是否开启回收站功能。默认为 false。</p>
     */
    public $UseRecycleBin;

    /**
     * @var integer <p>当开启回收站时，自动删除回收站项目的天数，不能超过 1095（3 年），指定为 0 则不自动删除，默认为 0。当未开启回收站时，该属性为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoRemoveRecycledDays;

    /**
     * @var boolean <p>是否启用文件路径搜索功能。默认为 false。</p>
     */
    public $EnableSearch;

    /**
     * @var boolean <p>设置媒体库或租户空间配额且配额小于已使用存储量时，是否拒绝设置请求。默认为 false。</p>
     */
    public $DenyOnQuotaLessThanUsage;

    /**
     * @var boolean <p>是否开启历史版本。默认为 false。</p>
     */
    public $EnableFileHistory;

    /**
     * @var integer <p>当开启历史版本时，指定单个文件保留的历史版本的数量上限，取值范围为 1 到 999。当未开启历史版本时，该属性可能为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileHistoryCount;

    /**
     * @var integer <p>当开启历史版本时，指定历史版本保留的最长天数，取值范围为 0 到 999，当指定为 0 时代表永久保留。当未开启历史版本时，该属性可能为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileHistoryExpireDay;

    /**
     * @var integer <p>目录或文件名的最长长度，不能超过 255，默认为 255。修改该参数不会影响存量目录或文件名，即如果将该字段的值改小，已经存在的长度超过目标值的目录或文件名不会发生变化。</p>
     */
    public $MaxDirFileNameLength;

    /**
     * @var boolean <p>是否开启公有读，开启后读操作无需使用访问令牌，默认为 false。仅单租户空间媒体库支持该属性，否则该属性为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsPublicRead;

    /**
     * @var boolean <p>媒体类型媒体库是否开启多相簿，开启后可创建一级目录（即相簿）且媒体文件只能保存在各相簿中，否则不能创建相簿且媒体文件只能保存在根目录。默认为 false。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。在媒体库创建后不能修改。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsMultiAlbum;

    /**
     * @var boolean <p>媒体类型媒体库是否允许上传照片，默认为 true。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllowPhoto;

    /**
     * @var array <p>当媒体类型媒体库允许上传照片时，指定允许的扩展名，默认为空数组，此时将根据文件扩展名对应的 MIME 类型自动判断。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllowPhotoExtName;

    /**
     * @var boolean <p>媒体类型媒体库是否允许上传视频，默认为 true。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllowVideo;

    /**
     * @var array <p>当媒体类型媒体库允许上传视频时，指定允许的扩展名，默认为空数组，此时将根据文件扩展名对应的 MIME 类型自动判断。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllowVideoExtName;

    /**
     * @var array <p>指定文件类型媒体库允许的文件扩展名，默认为空数组，此时允许上传所有类型文件。仅单租户空间文件类型媒体库支持该属性，否则该属性为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllowFileExtName;

    /**
     * @var boolean <p>照片上传时是否进行敏感内容鉴定，默认为 false。仅单租户空间媒体库支持该属性，否则该属性为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecognizeSensitiveContent;

    /**
     * @var boolean <p>是否开启媒体库配额</p><p>默认值：false</p><p>创建媒体库指定，创建后不允许修改</p>
     */
    public $EnableQuota;

    /**
     * @var integer <p>媒体库配额，单位：字节</p><p>取值范围：[1, 9223372036854775807]</p><p>创建媒体库时，开启媒体库配额情况下，此参数必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LibraryQuota;

    /**
     * @param boolean $IsFileLibrary <p>true 为文件类型媒体库，可存储任何类型文件；false 为媒体类型媒体库，仅可存储照片和视频类型文件。默认为 false。在媒体库创建后不能修改。</p>
     * @param boolean $IsMultiSpace <p>true 为多租户空间媒体库，可创建多个租户空间；false 为单租户空间媒体库，不能创建租户空间，仅可使用默认的单一租户空间。默认为 false。在媒体库创建后不能修改。</p>
     * @param string $CosStorageClass <p>保存至 COS 对象存储的文件的存储类型，仅支持 STANDARD、STANDARD_IA、INTELLIGENT_TIERING、MAZ_STANDARD、MAZ_STANDARD_IA 和 MAZ_INTELLIGENT_TIERING，默认为 STANDARD，当使用多 AZ 存储桶时将自动使用 MAZ_ 开头的用于多 AZ 的存储类型，否则自动使用非 MAZ_ 开头的用于非多 AZ 的存储类型。当指定智能分层存储 INTELLIGENT_TIERING 或 MAZ_INTELLIGENT_TIERING 时，需要事先为存储桶开启智能分层存储，否则将返回失败。在媒体库创建后不能修改。</p>
     * @param boolean $UseRecycleBin <p>是否开启回收站功能。默认为 false。</p>
     * @param integer $AutoRemoveRecycledDays <p>当开启回收站时，自动删除回收站项目的天数，不能超过 1095（3 年），指定为 0 则不自动删除，默认为 0。当未开启回收站时，该属性为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableSearch <p>是否启用文件路径搜索功能。默认为 false。</p>
     * @param boolean $DenyOnQuotaLessThanUsage <p>设置媒体库或租户空间配额且配额小于已使用存储量时，是否拒绝设置请求。默认为 false。</p>
     * @param boolean $EnableFileHistory <p>是否开启历史版本。默认为 false。</p>
     * @param integer $FileHistoryCount <p>当开启历史版本时，指定单个文件保留的历史版本的数量上限，取值范围为 1 到 999。当未开启历史版本时，该属性可能为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FileHistoryExpireDay <p>当开启历史版本时，指定历史版本保留的最长天数，取值范围为 0 到 999，当指定为 0 时代表永久保留。当未开启历史版本时，该属性可能为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxDirFileNameLength <p>目录或文件名的最长长度，不能超过 255，默认为 255。修改该参数不会影响存量目录或文件名，即如果将该字段的值改小，已经存在的长度超过目标值的目录或文件名不会发生变化。</p>
     * @param boolean $IsPublicRead <p>是否开启公有读，开启后读操作无需使用访问令牌，默认为 false。仅单租户空间媒体库支持该属性，否则该属性为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsMultiAlbum <p>媒体类型媒体库是否开启多相簿，开启后可创建一级目录（即相簿）且媒体文件只能保存在各相簿中，否则不能创建相簿且媒体文件只能保存在根目录。默认为 false。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。在媒体库创建后不能修改。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AllowPhoto <p>媒体类型媒体库是否允许上传照片，默认为 true。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AllowPhotoExtName <p>当媒体类型媒体库允许上传照片时，指定允许的扩展名，默认为空数组，此时将根据文件扩展名对应的 MIME 类型自动判断。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AllowVideo <p>媒体类型媒体库是否允许上传视频，默认为 true。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AllowVideoExtName <p>当媒体类型媒体库允许上传视频时，指定允许的扩展名，默认为空数组，此时将根据文件扩展名对应的 MIME 类型自动判断。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AllowFileExtName <p>指定文件类型媒体库允许的文件扩展名，默认为空数组，此时允许上传所有类型文件。仅单租户空间文件类型媒体库支持该属性，否则该属性为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $RecognizeSensitiveContent <p>照片上传时是否进行敏感内容鉴定，默认为 false。仅单租户空间媒体库支持该属性，否则该属性为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableQuota <p>是否开启媒体库配额</p><p>默认值：false</p><p>创建媒体库指定，创建后不允许修改</p>
     * @param integer $LibraryQuota <p>媒体库配额，单位：字节</p><p>取值范围：[1, 9223372036854775807]</p><p>创建媒体库时，开启媒体库配额情况下，此参数必填</p>
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
        if (array_key_exists("IsFileLibrary",$param) and $param["IsFileLibrary"] !== null) {
            $this->IsFileLibrary = $param["IsFileLibrary"];
        }

        if (array_key_exists("IsMultiSpace",$param) and $param["IsMultiSpace"] !== null) {
            $this->IsMultiSpace = $param["IsMultiSpace"];
        }

        if (array_key_exists("CosStorageClass",$param) and $param["CosStorageClass"] !== null) {
            $this->CosStorageClass = $param["CosStorageClass"];
        }

        if (array_key_exists("UseRecycleBin",$param) and $param["UseRecycleBin"] !== null) {
            $this->UseRecycleBin = $param["UseRecycleBin"];
        }

        if (array_key_exists("AutoRemoveRecycledDays",$param) and $param["AutoRemoveRecycledDays"] !== null) {
            $this->AutoRemoveRecycledDays = $param["AutoRemoveRecycledDays"];
        }

        if (array_key_exists("EnableSearch",$param) and $param["EnableSearch"] !== null) {
            $this->EnableSearch = $param["EnableSearch"];
        }

        if (array_key_exists("DenyOnQuotaLessThanUsage",$param) and $param["DenyOnQuotaLessThanUsage"] !== null) {
            $this->DenyOnQuotaLessThanUsage = $param["DenyOnQuotaLessThanUsage"];
        }

        if (array_key_exists("EnableFileHistory",$param) and $param["EnableFileHistory"] !== null) {
            $this->EnableFileHistory = $param["EnableFileHistory"];
        }

        if (array_key_exists("FileHistoryCount",$param) and $param["FileHistoryCount"] !== null) {
            $this->FileHistoryCount = $param["FileHistoryCount"];
        }

        if (array_key_exists("FileHistoryExpireDay",$param) and $param["FileHistoryExpireDay"] !== null) {
            $this->FileHistoryExpireDay = $param["FileHistoryExpireDay"];
        }

        if (array_key_exists("MaxDirFileNameLength",$param) and $param["MaxDirFileNameLength"] !== null) {
            $this->MaxDirFileNameLength = $param["MaxDirFileNameLength"];
        }

        if (array_key_exists("IsPublicRead",$param) and $param["IsPublicRead"] !== null) {
            $this->IsPublicRead = $param["IsPublicRead"];
        }

        if (array_key_exists("IsMultiAlbum",$param) and $param["IsMultiAlbum"] !== null) {
            $this->IsMultiAlbum = $param["IsMultiAlbum"];
        }

        if (array_key_exists("AllowPhoto",$param) and $param["AllowPhoto"] !== null) {
            $this->AllowPhoto = $param["AllowPhoto"];
        }

        if (array_key_exists("AllowPhotoExtName",$param) and $param["AllowPhotoExtName"] !== null) {
            $this->AllowPhotoExtName = $param["AllowPhotoExtName"];
        }

        if (array_key_exists("AllowVideo",$param) and $param["AllowVideo"] !== null) {
            $this->AllowVideo = $param["AllowVideo"];
        }

        if (array_key_exists("AllowVideoExtName",$param) and $param["AllowVideoExtName"] !== null) {
            $this->AllowVideoExtName = $param["AllowVideoExtName"];
        }

        if (array_key_exists("AllowFileExtName",$param) and $param["AllowFileExtName"] !== null) {
            $this->AllowFileExtName = $param["AllowFileExtName"];
        }

        if (array_key_exists("RecognizeSensitiveContent",$param) and $param["RecognizeSensitiveContent"] !== null) {
            $this->RecognizeSensitiveContent = $param["RecognizeSensitiveContent"];
        }

        if (array_key_exists("EnableQuota",$param) and $param["EnableQuota"] !== null) {
            $this->EnableQuota = $param["EnableQuota"];
        }

        if (array_key_exists("LibraryQuota",$param) and $param["LibraryQuota"] !== null) {
            $this->LibraryQuota = $param["LibraryQuota"];
        }
    }
}
